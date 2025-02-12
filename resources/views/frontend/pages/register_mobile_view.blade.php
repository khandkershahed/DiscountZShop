<div class="mobile-homepage" style="margin-top: 7rem;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h1>Join Us Today</h1>
                    <p class="pt-2 fw-normal text-muted" style="font-size: 1rem;">Your Journey Starts Here</p>
                    <p class="pt-3 mfs">Sign up now to access exclusive offers and discounts.</p>
                </div>
            </div>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="pt-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-outline">
                            <div class="mb-3 d-flex justify-content-center align-items-center">
                                <x-text-input id="name" class="form-control form-control-solid" type="text"
                                    name="name" :value="old('name')" required autofocus autocomplete="name"
                                    placeholder="Full Name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                <button type="button" class="px-2 btn lock-mobile">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <path
                                            d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21"
                                            stroke="black" stroke-opacity="0.2" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z"
                                            stroke="black" stroke-opacity="0.2" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3 d-flex justify-content-center align-items-center">
                            <x-text-input id="email" class="form-control form-control-solid" type="email"
                                name="email" :value="old('email')" required autocomplete="username"
                                placeholder="Valid Mail" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            <button type="button" class="px-2 btn lock-mobile">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z"
                                        stroke="black" stroke-opacity="0.2" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M22 6L12 13L2 6" stroke="black" stroke-opacity="0.2" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3 d-flex justify-content-center align-items-center">
                            <x-text-input id="phone_number" class="form-control form-control-solid" type="number"
                                name="phone_number" required autocomplete="phone_number" placeholder="Phone Number" />
                            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                            <button type="button" class="px-2 btn lock-mobile">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M17 2H7C5.89543 2 5 2.89543 5 4V20C5 21.1046 5.89543 22 7 22H17C18.1046 22 19 21.1046 19 20V4C19 2.89543 18.1046 2 17 2Z"
                                        stroke="black" stroke-opacity="0.2" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M12 18H12.01" stroke="black" stroke-opacity="0.2" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3 d-flex justify-content-center align-items-center">
                            <x-text-input id="password" class="form-control form-control-solid password-field"
                                type="password" name="password" required autocomplete="new-password"
                                placeholder="Strong Password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            <button type="button" class="px-2 btn lock-mobile toggle-password">
                                <svg class="lockIcon" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M19 11H5C3.89543 11 3 11.8954 3 13V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V13C21 11.8954 20.1046 11 19 11Z"
                                        stroke="black" stroke-opacity="0.2" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M7 11V7C7 5.67392 7.52678 4.40215 8.46447 3.46447C9.40215 2.52678 10.6739 2 12 2C13.3261 2 14.5979 2.52678 15.5355 3.46447C16.4732 4.40215 17 5.67392 17 7V11"
                                        stroke="black" stroke-opacity="0.2" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3 d-flex justify-content-center align-items-center">
                            <!-- Password Field -->
                            <x-text-input type="password" class="form-control password-field"
                                placeholder="Repeat Password" name="password_confirmation" required
                                autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            <!-- Toggle Button with Lock Icon -->
                            <button type="button" class="px-2 btn lock-mobile toggle-password">
                                <svg class="lockIcon" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M19 11H5C3.89543 11 3 11.8954 3 13V20C3 21.1046 3.89543 22 5 22H19C20.1046 22 21 21.1046 21 20V13C21 11.8954 20.1046 11 19 11Z"
                                        stroke="black" stroke-opacity="0.2" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M7 11V7C7 5.67392 7.52678 4.40215 8.46447 3.46447C9.40215 2.52678 10.6739 2 12 2C13.3261 2 14.5979 2.52678 15.5355 3.46447C16.4732 4.40215 17 5.67392 17 7V11"
                                        stroke="black" stroke-opacity="0.2" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </button>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-check " style="padding-top: 30px; padding-bottom: 30px">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label mfs" for="flexCheckDefault">
                                By checking the box you agree to our <a href="" class="site-text">Terms</a>
                                and <a class="site-text" href="">Conditions</a>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Submit button -->
                <div>
                    <x-primary-button class="px-4 btn btn-common-one rounded-pill w-100">
                        {{ __('Register') }}
                    </x-primary-button>
                    <p class="pt-3 text-center mfs">Already Member? <a href="{{ route('login') }}"><span
                                class="site-text">Login Now</span></a></p>
                </div>
            </div>
        </form>
    </div>
</div>

@push('scripts')
    <script>
        document.querySelectorAll('.toggle-password').forEach(button => {
            button.addEventListener('click', function() {
                // Find the password field and icon associated with the clicked button
                const passwordField = this
                    .previousElementSibling; // Assuming password field is right before the button
                const lockIcon = this.querySelector('.lockIcon');
                const currentType = passwordField.type;

                // Toggle the password visibility and icon classes
                if (currentType === "password") {
                    passwordField.type = "text";
                    lockIcon.classList.remove('fa-lock'); // Remove lock and danger classes
                    lockIcon.classList.add('fa-unlock'); // Add unlock and success classes
                } else {
                    passwordField.type = "password";
                    lockIcon.classList.remove('fa-unlock'); // Remove unlock and success classes
                    lockIcon.classList.add('fa-lock', ); // Add lock and danger classes
                }
            });
        });
    </script>
@endpush
