<x-frontend-app-layout :title="'DiscountZShop || Register'">

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
                                    <h2 class="fw-bold mb-5">Sign Up Now</h2>
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <!-- 2 column grid layout with text inputs for the first and last names -->
                                        <div class="row">
                                            <div class="col-md-12 col-12 mb-4">
                                                <div class="form-outline">
                                                    <x-input-label class="form-label" for="name"
                                                        :value="__('Name')" />
                                                    <x-text-input id="name" class="form-control form-control-solid"
                                                        type="text" name="name" :value="old('name')" required
                                                        autofocus autocomplete="name" placeholder="" />
                                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                                </div>
                                            </div>
                                            <div class="col-md-12 col-12 mb-4">
                                                <div class="form-outline">
                                                    <x-input-label class="form-label" for="email"
                                                        :value="__('Email')" />
                                                    <x-text-input id="email" class="form-control form-control-solid"
                                                        type="email" name="email" :value="old('email')" required
                                                        autocomplete="username" />
                                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 col-12 mb-4">
                                                <div class="form-outline">
                                                    <x-input-label class="form-label" for="password"
                                                        :value="__('Password')" />

                                                    <x-text-input id="password" class="form-control form-control-solid"
                                                        type="password" placeholder="********" name="password" required
                                                        autocomplete="new-password" />
                                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12 mb-4">
                                                <div class="form-outline">
                                                    <x-input-label class="form-label" for="password_confirmation"
                                                        :value="__('Confirm Password')" />

                                                    <x-text-input id="password_confirmation"
                                                        class="form-control form-control-solid" placeholder="********"
                                                        type="password" name="password_confirmation" required
                                                        autocomplete="new-password" />
                                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Checkbox -->
                                        <div class="form-check d-flex justify-content-center align-items-center mb-2">
                                            <h6 class="d-flex justify-content-start align-items-center">
                                                {{ __('Already registered?') }}
                                                <a href="{{ route('login') }}"
                                                    class="btn btn-sm btn-link text-gray fw-bold fs-6">Log In</a>
                                            </h6>
                                        </div>

                                        <div class="pt-4">
                                            <!-- Submit button -->
                                            <x-primary-button class="btn btn-common-one rounded-pill px-4 w-100 mb-4">
                                                {{ __('Register') }}
                                            </x-primary-button>
                                        </div>
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


    {{-- mobile-homepage --}}
    @include('frontend.pages.register_mobile_view')
    {{-- mobile-homepage --}}

</x-frontend-app-layout>
