<x-admin-app-layout :title="'HomePage Top Left Slider Update'">
    <div class="card card-flash">

        <div class="card-header mt-6">
            <div class="card-title"></div>
            <div class="card-toolbar">
                <a href="{{ route('admin.slider.index') }}" class="btn btn-light-info">
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

            <form class="form" action="{{ route('admin.slider.update', $slider->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf

                @method('PUT')

                <div class="row">

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="image" class="col-form-label fw-bold fs-6">{{ __('Thumbnail Image') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="image" name="image" :value="old('image')"></x-metronic.file-input>

                        <img class="mt-3"
                            src="{{ !empty($slider->image) ? url('storage/' . $slider->image) : 'https://ui-avatars.com/api/?name=' . urlencode($slider->name) }}"
                            height="80" width="80" alt="{{ $slider->name }}">
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="url"
                            class="col-form-label fw-bold fs-6 required">{{ __('Url') }}
                        </x-metronic.label>

                        <x-metronic.input id="url" type="text" name="url" :value="old('url',$slider->url)"
                            placeholder="Enter the Url" required></x-metronic.input>
                    </div>


                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="status" class="col-form-label required fw-bold fs-6">
                            {{ __('Select a Status ') }}</x-metronic.label>
                        <x-metronic.select-option id="status" name="status" data-hide-search="true"
                            data-placeholder="Select an option">
                            <option></option>
                            <option value="active" {{ $slider->status == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $slider->status == 'inactive' ? 'selected' : '' }}>Inactive
                            </option>
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
