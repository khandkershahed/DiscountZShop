<x-frontend-app-layout :title="'All Brands || DiscountZShop'">
    <style>
        .register-img {
            width: 100%;
            height: 600px;
            object-fit: cover;
        }
    </style>
    <div class="container py-5 desktop-homepage">
        <div class="row py-5">
            <div class="col-lg-10 offset-lg-1">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row g-0 align-items-center">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div>
                                        <h3>Reset Your Password</h3>
                                        <p class="pt-3">We understand that losing access to your account can be
                                            frustrating. Please follow the steps below to recover your password and
                                            regain access to your account. If you need any assistance, feel free to
                                            contact our support team.</p>
                                    </div>
                                    <!-- Session Status -->
                                    <div class="pt-5">
                                        <x-auth-session-status class="mb-4" :status="session('status')" />
                                        <form method="POST" action="{{ route('password.email') }}">
                                            @csrf
                                            <!-- Email Address -->
                                            <div>
                                                <x-input-label for="email" :value="__('Email')" />
                                                <x-text-input id="email" class="block mt-1 w-full form-control"
                                                    type="email" name="email" :value="old('email')" required
                                                    autofocus />
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>
                                            <div class="flex items-center justify-end mt-4">
                                                <x-primary-button class="btn btn-common-one rounded-pill mb-4">
                                                    {{ __('Email Password Reset Link') }}
                                                </x-primary-button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-5 mb-lg-0">
                                <img class="img-fluid register-img"
                                    src="https://easy-peasy.ai/cdn-cgi/image/quality=80,format=auto,width=700/https://fdczvxmwwjwpwbeeqcth.supabase.co/storage/v1/object/public/images/1930e85d-6fa9-4d9a-b735-f846774ad122/5a6a6077-82d7-4d9b-81e3-9a060ee2a72e.png"
                                    class="w-100 rounded-4 shadow-4" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-homepage parent-container">
        <div class="mobile-login-box">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1">
                        <div class="card border-0">
                            <div class="card-body p-0">
                                <div class="row g-0 align-items-center">
                                    <div class="col-lg-12">
                                        <div class="p-3">
                                            <div class="text-center">
                                                <h3>Reset Password</h3>
                                                <p class="pt-3">Enter the email associated with your account
                                                    and we’ll send an email with instructions to
                                                    reset your password.</p>
                                            </div>
                                            <!-- Session Status -->
                                            <div class="">
                                                <x-auth-session-status class="mb-4" :status="session('status')" />
                                                <form method="POST" action="{{ route('password.email') }}">
                                                    @csrf
                                                    <!-- Email Address -->
                                                    <div class="py-5">
                                                        <x-text-input id="email"
                                                            class="block mt-1 w-full form-control" type="email"
                                                            name="email" :value="old('email')" required autofocus
                                                            placeholder="Enter recovery email" />
                                                        <x-input-error :messages="$errors->get('email')" class="" />
                                                    </div>
                                                    <div class="flex items-center justify-end">
                                                        <x-primary-button class="btn btn-common-one rounded-pill mb-4">
                                                            {{ __('Send Instructions') }}
                                                        </x-primary-button>
                                                    </div>
                                                </form>
                                            </div>
                                            <div>
                                                <div class="login-mobile">
                                                    <p class="text-center">New Member?
                                                        <a href="{{ route('register') }}">
                                                            <span class="site-text">Register Now</span>
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-frontend-app-layout>
