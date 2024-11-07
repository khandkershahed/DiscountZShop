<div class="row">
    <div class="col-lg-12">
        <!--begin::Repeater-->
        <div id="kt_docs_repeater_advanced">
            <!--begin::Form group-->
            <div class="form-group">
                <div data-repeater-list="kt_docs_repeater_basic">
                    <div data-repeater-item>
                        <div class="form-group row mb-5">
                            <div class="col-lg-3">
                                <div class="mb-5">
                                    <x-metronic.label for="notify_to"
                                        class="col-form-label fw-bold fs-6">{{ __('Select a Notify') }}</x-metronic.label>
                                    <select class="form-select" data-kt-repeater="select2" required name="notify_to[]"
                                        data-hide-search="false" multiple data-placeholder="Select an option">
                                        <option></option>
                                        @foreach ($admins as $admin)
                                            <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-5">
                                    <x-metronic.label for="country_id"
                                        class="col-form-label fw-bold fs-6 required">{{ __('Select Country') }}</x-metronic.label>
                                    <select class="form-select" data-kt-repeater="select2" name="country_id"
                                        data-hide-search="false" data-placeholder="Select an option">
                                        <option></option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}" @selected(old('country_id') == $country->id)>
                                                {{ $country->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-5">
                                    <x-metronic.label for="division_id"
                                        class="col-form-label fw-bold fs-6">{{ __('Select Division') }}</x-metronic.label>
                                    <select class="form-select" data-kt-repeater="select2" required name="division_id"
                                        data-hide-search="false" multiple data-placeholder="Select an option">
                                        <option></option>
                                        @foreach ($divisions as $division)
                                            <option value="{{ $division->id }}" @selected(old('division_id') == $division->id)>
                                                {{ $division->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-5">
                                    <x-metronic.label for="city_id"
                                        class="col-form-label fw-bold fs-6">{{ __('Select City') }}</x-metronic.label>
                                    <select class="form-select" data-kt-repeater="select2" required name="city_id"
                                        data-hide-search="false" multiple data-placeholder="Select an option">
                                        <option></option>
                                        @foreach ($citys as $city)
                                            <option value="{{ $city->id }}" @selected(old('city_id') == $city->id)>
                                                {{ $city->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-3 mb-5">
                                <x-metronic.label for="area_id"
                                    class="col-form-label fw-bold fs-6">{{ __('Select Area') }}</x-metronic.label>
                                <select class="form-select" data-kt-repeater="select2" required name="area_id"
                                    data-hide-search="false" multiple data-placeholder="Select an option">
                                    <option></option>
                                    @foreach ($areas as $area)
                                        <option value="{{ $area->id }}" @selected(old('area_id') == $area->id)>
                                            {{ $area->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-3 mb-5">
                                <x-metronic.label for="name"
                                    class="col-form-label fw-bold fs-6 required">{{ __('name') }}
                                </x-metronic.label>
                                <x-metronic.input id="name" type="text" name="name" :value="old('name')"
                                    placeholder="Enter the Name" required></x-metronic.input>
                            </div>


                            <div class="col-lg-3 mb-7">
                                <x-metronic.label for="url"
                                    class="col-form-label fw-bold fs-6">{{ __('Url') }}
                                </x-metronic.label>

                                <x-metronic.input id="url" type="url" name="url" :value="old('url')"
                                    placeholder="https://www.google.com"></x-metronic.input>
                            </div>

                            <div class="col-lg-3 mb-7">
                                <x-metronic.label for="source_url"
                                    class="col-form-label fw-bold fs-6">{{ __('Source Url') }}
                                </x-metronic.label>

                                <x-metronic.input id="url" type="url" name="source_url" :value="old('source_url')"
                                    placeholder="https://www.google.com"></x-metronic.input>
                            </div>

                            <div class="col-lg-3 mb-7">
                                <x-metronic.label for="badge"
                                    class="col-form-label fw-bold fs-6">{{ __('Badge') }}
                                </x-metronic.label>

                                <x-metronic.input id="badge" type="text" name="badge" :value="old('badge')"
                                    placeholder="Eg: 30"></x-metronic.input>
                            </div>
                            <div class="col-lg-3">
                                <div class="mb-7">
                                    <x-metronic.label for="tags"
                                        class="col-form-label fw-bold fs-6">{{ __('Tags') }}
                                    </x-metronic.label>
                                    <input class="form-control" data-kt-repeater="tagify" name="tags"
                                        value="{{ old('tags') }}" />
                                </div>
                            </div>

                            <div class="col-lg-3 mb-7">
                                <x-metronic.label for="price"
                                    class="col-form-label fw-bold fs-6">{{ __('Price') }}
                                </x-metronic.label>

                                <x-metronic.input id="price" type="number" s name="price" :value="old('price')"
                                    placeholder="Eg:10,000.00"></x-metronic.input>
                            </div>

                            <div class="col-lg-3 mb-7">
                                <x-metronic.label for="offer_price"
                                    class="col-form-label fw-bold fs-6">{{ __('Offer Price') }}
                                </x-metronic.label>

                                <x-metronic.input id="offer_price" type="number" s name="offer_price"
                                    :value="old('offer_price')" placeholder="Eg:10,000.00"></x-metronic.input>
                            </div>

                            <div class="col-lg-3 mb-7">
                                <x-metronic.label for="offer_price"
                                    class="col-form-label fw-bold fs-6">{{ __('Coupon Code') }}
                                </x-metronic.label>

                                <x-metronic.input id="coupon_code" type="text" s name="coupon_code"
                                    :value="old('coupon_code')" placeholder="Eg: Dis-125874"></x-metronic.input>
                            </div>

                            <!-- Update for date fields -->
                            <div class="col-lg-3 mb-7">
                                <x-metronic.label for="start_date"
                                    class="col-form-label fw-bold fs-6 required">{{ __('Start Date') }}</x-metronic.label>
                                <x-metronic.input id="start_date" type="datetime-local" name="start_date"
                                    :value="old('start_date')" required></x-metronic.input>
                            </div>

                            <div class="col-lg-3 mb-7">
                                <x-metronic.label for="start_date"
                                    class="col-form-label fw-bold fs-6 required">{{ __('Notification Date') }}
                                </x-metronic.label>

                                <x-metronic.input id="notification_date" type="datetime-local"
                                    name="notification_date" :value="old('notification_date')" placeholder="Enter the Coupon Code"
                                    required></x-metronic.input>
                            </div>

                            <div class="col-lg-3 mb-7">
                                <x-metronic.label for="start_date"
                                    class="col-form-label fw-bold fs-6 required">{{ __('Expiry Date') }}
                                </x-metronic.label>

                                <x-metronic.input id="expiry_date" type="datetime-local" name="expiry_date"
                                    :value="old('expiry_date')" placeholder="Enter the Expiry Code" required></x-metronic.input>
                            </div>




                            <div class="col-lg-6 mb-7">
                                <x-metronic.label for="image"
                                    class="col-form-label fw-bold fs-6">{{ __('Thumbnail Image') }}
                                </x-metronic.label>
                                <x-metronic.file-input id="image" name="image"
                                    :value="old('image')"></x-metronic.file-input>
                            </div>




                            <div class="col-lg-6 mb-7">
                                <x-metronic.label for="status" class="col-form-label required fw-bold fs-6">
                                    {{ __('Select a Status ') }}</x-metronic.label>
                                <x-metronic.select-option id="status" name="status" data-hide-search="true"
                                    data-placeholder="Select an option">
                                    <option></option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </x-metronic.select-option>
                            </div>
                            <div class="col-lg-4 mb-7">
                                <x-metronic.label for="map_url"
                                    class="col-form-label fw-bold fs-6 required">{{ __('Map Url') }}
                                </x-metronic.label>

                                <x-metronic.textarea id="map_url" type="text" s name="map_url"
                                    :value="old('map_url')" placeholder="Please Map Url" required></x-metronic.textarea>
                            </div>
                            <div class="col-lg-8 mb-7">
                                <x-metronic.label for="short_description"
                                    class="col-form-label fw-bold fs-6">{{ __('Short Description') }}
                                </x-metronic.label>
                                <x-metronic.textarea id="short_description" placeholder="Write Short Description"
                                    name="short_description"></x-metronic.textarea>
                            </div>
                            <div class="col-lg-12 mb-7">
                                <x-metronic.label for="description"
                                    class="col-form-label fw-bold fs-6">{{ __('Description') }}
                                </x-metronic.label>
                                <textarea id="description" class="ckeditor" name="description"></textarea>
                            </div>
                            <div class="col-lg-12 mb-7">
                                <x-metronic.label for="locations"
                                    class="col-form-label fw-bold fs-6">{{ __('Location') }}
                                </x-metronic.label>
                                <textarea id="locations" class="ckeditor" name="locations"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end::Form group-->

            <!--begin::Form group-->
            <div class="form-group mt-5">
                <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                    <i class="ki-duotone ki-plus fs-3"></i>
                    Add
                </a>
            </div>
            <!--end::Form group-->
        </div>
        <!--end::Repeater-->
    </div>
</div>
<div class="row mt-2 justify-content-end">
    <div class="d-flex align-items-center justify-content-between">
        <a class="btn btn-lg btn-info rounded-0 tab-trigger-previous"
            data-bs-target="#kt_vtab_pane_1" aria-selected="false"
            role="tab" tabindex="-1">
            Previous
            <span class="svg-icon svg-icon-4 ms-1 me-0">
                <i class="fa-solid fa-arrow-right"></i>
            </span>
        </a>
        <x-metronic.button type="submit" class="info rounded-0">
            {{ __('Submit') }}
            <span class="svg-icon svg-icon-4 ms-1 me-0">
                <i class="fa-solid fa-arrow-right"></i>
            </span>
        </x-metronic.button>
    </div>
</div>

@push('scripts')
    <script>
        // The DOM elements you wish to replace with Tagify
        var input1 = document.querySelector("#kt_tagify_1");
        var input2 = document.querySelector("#kt_tagify_2");

        // Initialize Tagify components on the above inputs
        new Tagify(input1);
    </script>
    {{-- // $('#offers').repeater({ --}}
    <script>
        $('#kt_docs_repeater_advanced').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function() {
                $(this).slideDown();

                // Re-initialize select2 for new select elements
                var select2Element = $(this).find('[data-kt-repeater="select2"]');
                if (!select2Element.hasClass('select2-hidden-accessible')) {
                    select2Element.select2({
                        placeholder: "Select an option", // Optional: Set the placeholder
                        allowClear: true, // Optional: Allow clearing selection
                        width: '100%' // Ensure it fits within its parent container
                    });
                }

                // Re-initialize flatpickr
                $(this).find('[data-kt-repeater="datepicker"]').flatpickr();

                // Re-initialize tagify
                new Tagify(this.querySelector('[data-kt-repeater="tagify"]'));
            },

            hide: function(deleteElement) {
                $(this).slideUp(deleteElement);
            },

            ready: function() {
                // Initialize select2 for any initial select elements
                var select2Elements = $('[data-kt-repeater="select2"]');
                select2Elements.each(function() {
                    if (!$(this).hasClass('select2-hidden-accessible')) {
                        $(this).select2({
                            placeholder: "Select an option", // Optional: Set the placeholder
                            allowClear: true, // Optional: Allow clearing selection
                            width: '100%' // Ensure it fits within its parent container
                        });
                    }
                });

                // Initialize flatpickr
                $('[data-kt-repeater="datepicker"]').flatpickr();

                // Initialize Tagify
                new Tagify(document.querySelector('[data-kt-repeater="tagify"]'));
            }
        });
    </script>
@endpush
