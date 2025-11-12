<?php

namespace App\Http\Controllers\User\Api;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Ichtrojan\Otp\Models\Otp;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use App\Mail\EmailVerificationMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserApiController extends Controller
{
    private $otp;

    public function __construct()
    {
        $this->otp = new Otp();
    }

    public function register(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'name'     => 'required|string|max:255',
                'email'    => 'required|email|max:255|unique:users',
                'phone'    => 'required|string|max:19|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => 'error',
                    'errors' => $validator->errors()
                ], 422);
            }

            $user = User::create([
                'name'     => $request->name,
                'email'    => $request->email,
                'phone'    => $request->phone,
                'password' => Hash::make($request->password),
            ]);

            $token = $user->createToken('apiToken')->plainTextToken;

            return response()->json([
                'status'  => 'success',
                'message' => 'User registered successfully.',
                'token'   => $token,
                'user'    => $user
            ], 201);
        } catch (\Throwable $e) {
            // Log::error('Register error: ' . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'Registration failed.'], 500);
        }
    }

    /**
     * ✅ User Login
     */
    public function login(Request $request)
    {
        try {
            $request->validate([
                'email'    => 'required|email',
                'password' => 'required',
            ]);

            $user = User::where('email', $request->email)->first();

            if (!$user || !Hash::check($request->password, $user->password)) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Invalid credentials.'
                ], 401);
            }

            $token = $user->createToken('apiToken')->plainTextToken;

            return response()->json([
                'status'  => 'success',
                'message' => 'Login successful.',
                'token'   => $token,
                'user'    => $user
            ]);
        } catch (\Throwable $e) {
            // Log::error('Login error: ' . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'Login failed.'], 500);
        }
    }

    /**
     * ✅ Logout
     */
    public function logout(Request $request)
    {
        try {
            $request->user()->tokens()->delete();

            return response()->json([
                'status'  => 'success',
                'message' => 'Logged out successfully.'
            ]);
        } catch (\Throwable $e) {
            // Log::error('Logout error: ' . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'Logout failed.'], 500);
        }
    }

    /**
     * ✅ Send Email Verification OTP
     */
    public function sendEmailVerification(Request $request)
    {
        try {
            $request->validate(['email' => 'required|email|exists:users']);

            $user = User::where('email', $request->email)->first();
            $otp  = $this->otp->generate($user->email, 6, 15);

            Mail::to($user->email)->send(new EmailVerificationMail($otp->token, $user->name));

            return response()->json([
                'status'  => 'success',
                'message' => 'Verification OTP sent successfully.'
            ]);
        } catch (\Throwable $e) {
            // Log::error('Send Email Verification error: ' . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'Failed to send OTP.'], 500);
        }
    }

    /**
     * ✅ Verify Email
     */
    public function emailVerification(Request $request)
    {
        try {
            $request->validate([
                'email' => 'required|email|exists:users',
                'otp'   => 'required|string|max:6',
            ]);

            $otpCheck = $this->otp->validate($request->email, $request->otp);

            if (!$otpCheck->status) {
                return response()->json([
                    'status'  => 'error',
                    'message' => 'Invalid or expired OTP.'
                ], 400);
            }

            $user = User::where('email', $request->email)->first();
            $user->update(['email_verified_at' => now()]);

            return response()->json([
                'status'  => 'success',
                'message' => 'Email verified successfully.'
            ]);
        } catch (\Throwable $e) {
            // Log::error('Email Verification error: ' . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'Email verification failed.'], 500);
        }
    }

    /**
     * ✅ Forgot Password
     */
    public function forgotPassword(Request $request)
    {
        try {
            $request->validate(['email' => 'required|email|exists:users']);

            $token = Str::random(60);
            DB::table('password_reset_tokens')->upsert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => now()
            ], ['email'], ['token', 'created_at']);

            Mail::raw("Your password reset token is: $token", function ($msg) use ($request) {
                $msg->to($request->email)->subject('Password Reset');
            });

            return response()->json([
                'status'  => 'success',
                'message' => 'Password reset token sent.'
            ]);
        } catch (\Throwable $e) {
            // Log::error('Forgot Password error: ' . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'Failed to send reset token.'], 500);
        }
    }

    /**
     * ✅ Reset Password
     */
    public function reset(Request $request, $token)
    {
        try {
            $request->validate(['password' => 'required|confirmed|min:8']);

            DB::table('password_reset_tokens')
                ->where('created_at', '<=', now()->subMinutes(10))
                ->delete();

            $record = DB::table('password_reset_tokens')->where('token', $token)->first();
            if (!$record) {
                return response()->json(['status' => 'error', 'message' => 'Invalid or expired token.'], 404);
            }

            $user = User::where('email', $record->email)->firstOrFail();
            $user->update(['password' => Hash::make($request->password)]);

            DB::table('password_reset_tokens')->where('email', $user->email)->delete();

            return response()->json([
                'status'  => 'success',
                'message' => 'Password reset successfully.'
            ]);
        } catch (\Throwable $e) {
            // Log::error('Reset Password error: ' . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'Password reset failed.'], 500);
        }
    }

    /**
     * ✅ Update Password (Authenticated)
     */
    public function updatePassword(Request $request)
    {
        try {
            $request->validate([
                'current_password' => 'required',
                'new_password'     => 'required|confirmed|min:8',
            ]);

            if (!Hash::check($request->current_password, $request->user()->password)) {
                return response()->json(['status' => 'error', 'message' => 'Incorrect current password.'], 400);
            }

            $request->user()->update(['password' => Hash::make($request->new_password)]);

            return response()->json([
                'status'  => 'success',
                'message' => 'Password updated successfully.'
            ]);
        } catch (\Throwable $e) {
            // Log::error('Update Password error: ' . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'Failed to update password.'], 500);
        }
    }

    /**
     * ✅ User Profile
     */
    public function profile(Request $request)
    {
        return response()->json([
            'status'  => 'success',
            'message' => 'Profile retrieved successfully.',
            'user'    => $request->user()
        ]);
    }

    /**
     * ✅ Edit Profile
     */
    public function editProfile(Request $request)
    {
        try {
            $user = $request->user();

            $request->validate([
                'name'  => 'required|string|max:255',
                'email' => 'required|email|max:255|unique:users,email,' . $user->id,
                'phone' => 'nullable|string|max:19|unique:users,phone,' . $user->id,
                'profile_image' => 'nullable|image|max:2048',
            ]);

            $data = $request->only(['name', 'email', 'phone', 'gender', 'city', 'area', 'location']);

            if ($request->hasFile('profile_image')) {
                if ($user->profile_image) Storage::delete('public/' . $user->profile_image);
                $data['profile_image'] = $request->file('profile_image')->store('profile_images', 'public');
            }

            $user->update($data);

            $user->profile_image = $user->profile_image ? url('storage/' . $user->profile_image) : null;

            return response()->json([
                'status'  => 'success',
                'message' => 'Profile updated successfully.',
                'user'    => $user
            ]);
        } catch (\Throwable $e) {
            // Log::error('Edit Profile error: ' . $e->getMessage());
            return response()->json(['status' => 'error', 'message' => 'Failed to update profile.'], 500);
        }
    }

    public function deleteAccount(Request $request)
    {
        try {
            $user = $request->user();
            if ($user->profile_image) {
                Storage::delete('public/' . $user->profile_image);
            }
            $user->tokens()->delete();
            $user->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'Account deleted successfully.'
            ]);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Failed to delete account.'
            ], 500);
        }
    }
}
