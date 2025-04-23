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
use Illuminate\Support\Facades\Validator;

class UserApiController extends Controller
{
    private $otp;

    public function __construct()
    {
        $this->otp = new Otp();
    }

    /**
     * Register a new user.
     *
     * @param Request $request
     * @return JsonResponse
     */
    // public function register(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'password' => 'required|string|min:8|confirmed',
    //     ], [
    //         'name.required' => 'Name is required',
    //         'email.required' => 'Email is required',
    //         'password.required' => 'Password is required',
    //     ]);

    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //     ]);

    //     return response()->json([
    //         'message' => 'Registration Success',
    //         'status' => 'success'
    //     ], 201);
    // }
    // public function register(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users',
    //         'phone' => 'required|string|max:19|',
    //         'password' => 'required|string|min:8|confirmed',
    //     ], [
    //         'name.required' => 'Name is required',
    //         'email.required' => 'Email is required',
    //         'phone.required' => 'Your Phone Number is required',
    //         'password.required' => 'Password is required',
    //     ]);
    //     if ($validator->fails()) {
    //         return $this->sendError('Validation Error.', $validator->errors());
    //     }
    //     $input = $request->all();
    //     // $input['password'] = bcrypt($input['password']);
    //     $input['password'] = Hash::make($input['password']);
    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'phone' => $request->phone,
    //         'password' => Hash::make($request->password),
    //     ]);
    //     $success['token'] =  $user->createToken('apiToken')->plainTextToken;
    //     $success['name'] =  $user->name;
    //     // $otp = Otp::generate($user->email, 6, 15);
    //     // Mail::to($user->email)->send(new EmailVerificationMail($otp->token, $user->name));
    //     return $this->sendResponse($success, 'User is registered successfully.');
    // }
    // public function sendemailVerification(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'email' => 'required|email|max:255|exists:users',
    //     ], [
    //         'email.required' => 'Email is required',
    //     ]);
    //     if ($validator->fails()) {
    //         return $this->sendError('Validation Error.', $validator->errors());
    //     }
    //     $user = User::where('email', $request->email)->first();
    //     $otp = Otp::generate($user->email, 6, 15);
    //     Mail::to($user->email)->send(new EmailVerificationMail($otp->token, $user->name));
    //     return $this->sendResponse($user, 'Email verification OTP sent successfully.');
    // }
    // public function emailVerification(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'email' => 'required|email|max:255|exists:users',
    //         'otp' => 'required|max:6',
    //     ], [
    //         'email.required' => 'Email is required',
    //         'otp.required' => 'OTP is required',
    //     ]);
    //     if ($validator->fails()) {
    //         return $this->sendError('Validation Error.', $validator->errors());
    //     }
    //     $otp2 = Otp::verify($request->email, $request->otp);
    //     if ($otp2) {
    //         $user = User::where('email', $request->email)->first();
    //         $user->update(['email_verified_at' => now()]);
    //         return $this->sendResponse($user, 'Email is verified successfully.');
    //     } else {
    //         return $this->sendError('Validation Error.', ['otp' => 'OTP is not valid']);
    //     }
    // }

    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email',
    //         'password' => 'required',
    //     ], [
    //         'email.required' => 'Email is required',
    //         'password.required' => 'Password is required',
    //     ]);

    //     $user = User::where('email', $request->email)->first();

    //     if (!$user || !Hash::check($request->password, $user->password)) {
    //         return response()->json([
    //             'message' => 'The provided credentials are incorrect.',
    //             'status' => 'error'
    //         ], 401);
    //     }

    //     return response()->json([
    //         'token' => $user->createToken('apiToken')->plainTextToken,
    //         'message' => 'Login Success',
    //         'status' => 'success'
    //     ], 200);
    // }

    // public function logout(Request $request)
    // {
    //     // $request->user()->currentAccessToken()->delete();
    //     $request->user()->tokens()->delete();
    //     return response()->json([
    //         'message' => 'User Logged Out Successfully',
    //         'status' => 'success'
    //     ], 200);
    // }

    // public function updatePassword(Request $request)
    // {
    //     $request->validate([
    //         'current_password' => ['required', 'string'],
    //         'new_password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);

    //     if (!Hash::check($request->current_password, $request->user()->password)) {
    //         return response()->json([
    //             'message' => 'Current password is incorrect',
    //             'status' => 'error'
    //         ], 400);
    //     }

    //     $request->user()->update(['password' => Hash::make($request->new_password)]);

    //     return response()->json([
    //         'message' => 'Password changed successfully',
    //         'status' => 'success'
    //     ], 200);
    // }

    // public function reset(Request $request, $token)
    // {
    //     // Delete Token older than 2 minute
    //     $formatted = now()->subMinutes(2)->toDateTimeString();
    //     DB::table('password_reset_tokens')->where('created_at', '<=', $formatted)->delete();

    //     $request->validate([
    //         'password' => 'required|confirmed',
    //     ]);

    //     $passwordreset = DB::table('password_reset_tokens')->where('token', $token)->first();

    //     if (!$passwordreset) {
    //         return response([
    //             'message' => 'Token is Invalid or Expired',
    //             'status' => 'failed'
    //         ], 404);
    //     }

    //     // Update the user's password
    //     User::where('email', $passwordreset->email)->update([
    //         'password' => Hash::make($request->password),
    //     ]);

    //     // Delete the token after resetting password
    //     DB::table('password_reset_tokens')->where('email', $passwordreset->email)->delete();

    //     return response([
    //         'message' => 'Password Reset Success',
    //         'status' => 'success'
    //     ], 200);
    // }

    // public function forgotPassword(Request $request)
    // {
    //     $request->validate(['email' => 'required|email']);

    //     $email = $request->email;

    //     // Check if the email exists
    //     $user = User::where('email', $email)->first();
    //     if (!$user) {
    //         return response([
    //             'message' => 'Email does not exist',
    //             'status' => 'failed'
    //         ], 404);
    //     }

    //     // Generate Token
    //     $token = Str::random(60);

    //     // Saving Data to Password Reset Table
    //     DB::table('password_reset_tokens')->upsert([
    //         'email' => $email,
    //         'token' => $token,
    //         'created_at' => now()
    //     ], ['email'], ['token', 'created_at']);

    //     // Sending EMail with Password Reset Token
    //     Mail::raw("Your password reset token is: $token", function ($message) use ($email) {
    //         $message->subject('Reset Your Password');
    //         $message->to($email);
    //     });

    //     return response([
    //         'message' => 'Password Reset Email Sent... Check Your Email',
    //         'status' => 'success'
    //     ], 200);
    // }

    // public function profile(Request $request)
    // {
    //     return response()->json([
    //         'user' => $request->user(),
    //         'message' => 'User profile retrieved successfully.',
    //         'status' => 'success'
    //     ], 200);
    // }

    // public function editProfile(Request $request)
    // {
    //     $request->validate([
    //         'name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:users,email,' . $request->user()->id,
    //     ], [
    //         'name.required' => 'Name is required',
    //         'email.required' => 'Email is required',
    //     ]);

    //     $user = $request->user();

    //     $user->update([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //     ]);

    //     return response()->json([
    //         'user' => $user,
    //         'message' => 'Profile updated successfully',
    //         'status' => 'success'
    //     ], 200);
    // }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:19',
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'phone'    => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        $success['token'] = $user->createToken('apiToken')->plainTextToken;
        $success['name']  = $user->name;

        return $this->sendResponse($success, 'User registered successfully.');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'The provided credentials are incorrect.',
                'status'  => 'error'
            ], 401);
        }
        // dd($request->user());
        return response()->json([
            'token'   => $user->createToken('apiToken')->plainTextToken,
            'message' => 'Login success',
            'status'  => 'success'
        ]);
    }

    public function logout(Request $request)
    {
        dd($request->user());
        $request->user()->tokens()->delete();

        return response()->json([
            'message' => 'User logged out successfully.',
            'status'  => 'success'
        ]);
    }

    public function sendemailVerification(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255|exists:users',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $user = User::where('email', $request->email)->first();
        $otp  = Otp::generate($user->email, 6, 15);

        Mail::to($user->email)->send(new EmailVerificationMail($otp->token, $user->name));

        return $this->sendResponse([], 'Email verification OTP sent successfully.');
    }

    public function emailVerification(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users',
            'otp'   => 'required|string|max:6',
        ]);

        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $otp2 = Otp::validate($request->email, $request->otp);

        if (!$otp2->status) {
            return $this->sendError('Invalid OTP.', ['otp' => 'The provided OTP is not valid or expired']);
        }

        $user = User::where('email', $request->email)->first();
        $user->email_verified_at = now();
        $user->save();

        return $this->sendResponse($user, 'Email verified successfully.');
    }

    public function forgotPassword(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['message' => 'Email does not exist', 'status' => 'error'], 404);
        }

        $token = Str::random(60);

        DB::table('password_reset_tokens')->upsert([
            'email'      => $request->email,
            'token'      => $token,
            'created_at' => now()
        ], ['email'], ['token', 'created_at']);

        Mail::raw("Your password reset token is: $token", function ($message) use ($request) {
            $message->to($request->email)->subject('Password Reset');
        });

        return response()->json([
            'message' => 'Password reset token sent.',
            'status'  => 'success'
        ]);
    }

    public function reset(Request $request, $token)
    {
        $request->validate([
            'password' => 'required|confirmed',
        ]);

        DB::table('password_reset_tokens')
            ->where('created_at', '<=', now()->subMinutes(2))
            ->delete();

        $record = DB::table('password_reset_tokens')->where('token', $token)->first();

        if (!$record) {
            return response()->json(['message' => 'Invalid or expired token.', 'status' => 'error'], 404);
        }

        $user = User::where('email', $record->email)->first();
        $user->password = Hash::make($request->password);
        $user->save();

        DB::table('password_reset_tokens')->where('email', $user->email)->delete();

        return response()->json([
            'message' => 'Password reset successfully.',
            'status'  => 'success'
        ]);
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'new_password'     => 'required|confirmed|min:8',
        ]);

        if (!Hash::check($request->current_password, $request->user()->password)) {
            return response()->json([
                'message' => 'Current password is incorrect.',
                'status'  => 'error'
            ], 400);
        }

        $request->user()->update([
            'password' => Hash::make($request->new_password),
        ]);

        return response()->json([
            'message' => 'Password updated successfully.',
            'status'  => 'success'
        ]);
    }

    public function profile(Request $request)
    {
        return response()->json([
            'user'    => $request->user(),
            'message' => 'User profile retrieved successfully.',
            'status'  => 'success'
        ]);
    }

    public function editProfile(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $request->user()->id,
        ]);

        $user = $request->user();
        $user->update([
            'name'  => $request->name,
            'email' => $request->email,
        ]);

        return response()->json([
            'user'    => $user,
            'message' => 'Profile updated successfully.',
            'status'  => 'success'
        ]);
    }
}
