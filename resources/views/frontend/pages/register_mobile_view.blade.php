<div class="mobile-homepage" style="margin-top: 7rem;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h1>Get Started</h1>
                    <p class="mfs">by creating a free account.</p>
                </div>
            </div>
        </div>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="pt-4">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-outline">
                            <div class="mb-3">
                                <x-text-input id="name" class="form-control form-control-solid" type="text"
                                    name="name" :value="old('name')" required autofocus autocomplete="name"
                                    placeholder="Full Name" />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <x-text-input id="email" class="form-control form-control-solid" type="email"
                                name="email" :value="old('email')" required autocomplete="username"
                                placeholder="Valid Mail" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <x-text-input id="password" class="form-control form-control-solid" type="password"
                                name="password" required autocomplete="new-password" placeholder="Valid Mail" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <x-text-input id="password_confirmation" class="form-control form-control-solid"
                                type="password" name="password_confirmation" required autocomplete="new-password"
                                placeholder="Strong Password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <x-text-input id="password_confirmation" class="form-control form-control-solid"
                                type="password" name="password_confirmation" required autocomplete="new-password"
                                placeholder="Repeat Password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-check pt-3 pb-5">
                            <input class="form-check-input" type="checkbox" value=""
                                id="flexCheckDefault">
                            <label class="form-check-label mfs" for="flexCheckDefault">
                                By checking the box you agree to our <a href="" class="site-text">Terms</a>
                                and <a class="site-text" href="">Conditions</a>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- Submit button -->
                <div class="mt-4 pb-3" style="margin-bottom: 140px">
                    <x-primary-button class="btn btn-common-one rounded-pill px-4 w-100">
                        {{ __('Register') }}
                    </x-primary-button>
                    <p class="text-center pt-3 mfs">New Member? <a href="{{ route('register') }}"><span
                                class="site-text">Register Now</span></a></p>
                </div>
            </div>
        </form>
    </div>
</div>
