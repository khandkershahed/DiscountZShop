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
                                    <div>
                                        <h3>Recover Your Password !</h3>
                                        <p class="pt-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore quam
                                            architecto quas illo
                                            hic fuga impedit velit aut quod voluptate iusto doloremque deleniti sapiente
                                            incidunt id
                                            aliquid, animi, eos ducimus?</p>
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

</x-frontend-app-layout>
