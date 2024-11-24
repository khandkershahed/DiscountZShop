<x-frontend-app-layout :title="'All Brands || DiscountZShop'">
    <style>
        .register-img {
            width: 100%;
            height: 600px;
            object-fit: cover;
        }
    </style>
    <div class="container py-5">
        <div class="row py-5">
            <div class="col-lg-10 offset-lg-1">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="row g-0 align-items-center">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <h2 class="fw-bold mb-5">Log In</h2>
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <!-- 2 column grid layout with text inputs for the first and last names -->
                                        <div class="row mb-4">
                                            <div class="form-outline">
                                                <x-input-label class="form-label" for="email" :value="__('Email')" />
                                                <x-text-input id="email" class="form-control form-control-solid"
                                                    type="email" name="email" :value="old('email')" required
                                                    autocomplete="username" />
                                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="form-outline">
                                                <x-input-label class="form-label" for="password" :value="__('Password')" />

                                                <x-text-input id="password" class="form-control form-control-solid"
                                                    type="password" name="password" required
                                                    autocomplete="new-password" />
                                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                            </div>
                                        </div>

                                        <!-- Checkbox -->
                                        <div class="row justify-content-between align-items-center">
                                            <div
                                                class="form-check d-flex justify-content-center align-items-center mb-3">
                                                <input class="form-check-input me-2" type="checkbox" value=""
                                                    id="remember_me" name="remember" />
                                                <label class="form-check-label" for="remember_me">
                                                    {{ __('Remember me') }}
                                                </label>
                                            </div>
                                            @if (Route::has('password.request'))
                                                <div
                                                    class="form-check d-flex justify-content-center align-items-center mb-3">
                                                    <h6 class="d-flex justify-content-center align-items-center">
                                                        {{ __('Forgot your password?') }}
                                                        <a href="{{ route('password.request') }}"
                                                            class="btn btn-sm btn-link text-gray fw-bold fs-6">{{ __('Click Here...') }}</a>
                                                    </h6>
                                                </div>
                                            @endif
                                        </div>

                                        <!-- Submit button -->
                                        <x-primary-button class="btn btn-common-one rounded-pill mb-4">
                                            {{ __('Log in') }}
                                        </x-primary-button>
                                    </form>
                                </div>
                            </div>

                            <div class="col-lg-6 mb-5 mb-lg-0">
                                <img class="img-fluid register-img"
                                    src="https://media.licdn.com/dms/image/v2/D4D12AQEz0JbIZ3VM0A/article-cover_image-shrink_720_1280/article-cover_image-shrink_720_1280/0/1680268909288?e=2147483647&v=beta&t=GsW_UsM64uuv97J6AygRVNiHfIuP4NBD259h9aLbsvU"
                                    class="w-100 rounded-4 shadow-4" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-frontend-app-layout>
