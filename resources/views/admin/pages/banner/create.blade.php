<x-admin-app-layout :title="'HomePage Top Right Banners Add'">
    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title"></div>
            <div class="card-toolbar">
                <a href="{{ route('admin.banner.index') }}" class="btn btn-light-info">
                    <span class="svg-icon svg-icon-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                                fill="currentColor" />
                            <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                            <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                fill="currentColor" />
                        </svg>
                    </span>

                    Back to the list
                </a>
            </div>
        </div>
        <div class="card-body pt-0">

            <form class="form" action="{{ route('admin.banner.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf

                <div class="row">

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="image_one"
                            class="col-form-label fw-bold fs-6 ">{{ __('HomePage Top Right Banners Top image') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="image_one" name="image_one"
                            :value="old('image_one')"></x-metronic.file-input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="image_one_url"
                            class="col-form-label fw-bold fs-6 required">{{ __('Image One Url') }}
                        </x-metronic.label>

                        <x-metronic.input id="image_one_url" type="url" name="image_one_url" :value="old('image_one_url')"
                            placeholder="https://www.google.co.uk/" required></x-metronic.input>
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="image_two"
                            class="col-form-label fw-bold fs-6">{{ __('HomePage Top Right Banners Bottom Left Image') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="image_two" name="image_two"
                            :value="old('image_two')"></x-metronic.file-input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="image_two_url"
                            class="col-form-label fw-bold fs-6 required">{{ __('Image Two Url') }}
                        </x-metronic.label>

                        <x-metronic.input id="image_two_url" type="url" name="image_two_url" :value="old('image_two_url')"
                            placeholder="https://www.google.co.uk/" required></x-metronic.input>
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="image_three"
                            class="col-form-label fw-bold fs-6 ">{{ __('HomePage Top Right Banners Bottom Right Image') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="image_three" :value="old('image_three')"
                            name="image_three"></x-metronic.file-input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="image_three_url"
                            class="col-form-label fw-bold fs-6 required">{{ __('Image Three Url') }}
                        </x-metronic.label>

                        <x-metronic.input id="image_three_url" type="url" name="image_three_url" :value="old('image_three_url')"
                            placeholder="https://www.google.co.uk/" required></x-metronic.input>
                    </div>


                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="status" class="col-form-label required fw-bold fs-6">
                            {{ __('Select a Status ') }}</x-metronic.label>
                        <x-metronic.select-option id="status" name="status" data-hide-search="true"
                            data-placeholder="Select an option">
                            <option></option>
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </x-metronic.select-option>
                    </div>


                </div>
                <div class="text-center pt-15">
                    <x-metronic.button type="submit" class="primary">
                        {{ __('Submit') }}
                    </x-metronic.button>
                </div>

            </form>

        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // The DOM elements you wish to replace with Tagify
            var input1 = document.querySelector("#tags");
            // Initialize Tagify components on the above inputs
            new Tagify(input1);
        });
    </script>
</x-admin-app-layout>
