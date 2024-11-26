<x-admin-app-layout :title="'Special Offer Edit'">
    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title"></div>
            <div class="card-toolbar">
                <a href="{{ route('admin.special-offer.index') }}" class="btn btn-light-info">
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
            <form class="form" action="{{ route('admin.special-offer.update', $offer->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <!-- Update for brand_id -->
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="brand_id"
                            class="col-form-label fw-bold fs-6">{{ __('Select a Brand') }}</x-metronic.label>
                        <x-metronic.select-option id="brand_id" name="brand_id" data-hide-search="false"
                            data-placeholder="Select an option">
                            <option></option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}"
                                    {{ old('brand_id', $offer->brand_id) == $brand->id ? 'selected' : '' }}>
                                    {{ $brand->name }}
                                </option>
                            @endforeach
                        </x-metronic.select-option>
                    </div>

                    <!-- Name -->
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="name"
                            class="col-form-label fw-bold fs-6 required">{{ __('Name') }}</x-metronic.label>
                        <x-metronic.input id="name" type="text" name="name"
                            value="{{ old('name', $offer->name) }}" placeholder="Enter the Name" required />
                    </div>

                    <!-- Button Name -->
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="button_name"
                            class="col-form-label fw-bold fs-6">{{ __('Button Name') }}</x-metronic.label>
                        <x-metronic.input id="button_name" type="text" name="button_name"
                            value="{{ old('button_name', $offer->button_name) }}" placeholder="Button Name" />
                    </div>

                    <!-- Button Link -->
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="button_link"
                            class="col-form-label fw-bold fs-6">{{ __('Button Link') }}</x-metronic.label>
                        <x-metronic.input id="button_link" type="text" name="button_link"
                            value="{{ old('button_link', $offer->button_link) }}" placeholder="Button Link" />
                    </div>

                    <!-- Date Fields -->
                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="start_date"
                            class="col-form-label fw-bold fs-6 required">{{ __('Start Date') }}</x-metronic.label>
                        <x-metronic.input id="start_date" type="datetime-local" name="start_date"
                            value="{{ old('start_date', $offer->start_date) }}" />
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="end_date"
                            class="col-form-label fw-bold fs-6 required">{{ __('End Date') }}</x-metronic.label>
                        <x-metronic.input id="end_date" type="datetime-local" name="end_date"
                            value="{{ old('end_date', $offer->end_date) }}" />
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="date"
                            class="col-form-label fw-bold fs-6 required">{{ __('Date') }}</x-metronic.label>
                        <x-metronic.input id="date" type="datetime-local" name="date"
                            value="{{ old('date', $offer->date) }}" />
                    </div>

                    <!-- Image Uploads -->
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="logo"
                            class="col-form-label fw-bold fs-6">{{ __('Logo') }}</x-metronic.label>
                        <x-metronic.file-input id="logo" name="logo" />
                        @if ($offer->logo)
                            <img src="{{ asset('storage/' . $offer->logo) }}" alt="Current Logo" class="mt-2"
                                width="100">
                        @endif
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="image"
                            class="col-form-label fw-bold fs-6">{{ __('Thumbnail Image') }}</x-metronic.label>
                        <x-metronic.file-input id="image" name="image" />
                        @if ($offer->image)
                            <img src="{{ asset('storage/' . $offer->image) }}" alt="Current Thumbnail" class="mt-2"
                                width="100">
                        @endif
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="banner_image"
                            class="col-form-label fw-bold fs-6">{{ __('Banner Image') }}</x-metronic.label>
                        <x-metronic.file-input id="banner_image" name="banner_image" />
                        @if ($offer->banner_image)
                            <img src="{{ asset('storage/' . $offer->banner_image) }}" alt="Current Banner"
                                class="mt-2" width="100">
                        @endif
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="footer_banner"
                            class="col-form-label fw-bold fs-6">{{ __('Footer Banner Image') }}</x-metronic.label>
                        <x-metronic.file-input id="footer_banner" name="footer_banner" />
                        @if ($offer->footer_banner)
                            <img src="{{ asset('storage/' . $offer->footer_banner) }}" alt="Current Footer Banner"
                                class="mt-2" width="100">
                        @endif
                    </div>

                    <!-- Status -->
                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="status"
                            class="col-form-label fw-bold fs-6 required">{{ __('Select a Status') }}</x-metronic.label>
                        <x-metronic.select-option id="status" name="status" data-hide-search="true"
                            data-placeholder="Select an option">
                            <option></option>
                            <option value="active" {{ old('status', $offer->status) == 'active' ? 'selected' : '' }}>
                                Active</option>
                            <option value="inactive"
                                {{ old('status', $offer->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </x-metronic.select-option>
                    </div>

                </div>

                <div class="float-end pt-15">
                    <x-metronic.button type="submit" class="primary">{{ __('Update') }}</x-metronic.button>
                </div>

            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Initialize Tagify if you need to use it for tags input (make sure the #tags field exists)
            var input1 = document.querySelector("#tags");
            if (input1) {
                new Tagify(input1);
            }
        });
    </script>
</x-admin-app-layout>
