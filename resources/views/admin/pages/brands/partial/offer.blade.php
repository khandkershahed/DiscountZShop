
<div class="row">
    <div class="mb-7" id="offers">
        <!--begin::Form group-->
        <div class="form-group">
            <div data-repeater-list="offers">
                <div data-repeater-item>
                    <div class="form-group row mb-5">
                        <div class="col-lg-3 mb-5">
                            <x-metronic.label for="notify_to"
                                class="col-form-label fw-bold fs-6">{{ __('Select a Notify') }}</x-metronic.label>
                            <select class="form-select" data-kt-repeater="select2" required name="notify_to[]" data-hide-search="false"
                                multiple data-placeholder="Select an option">
                                <option></option>
                                @foreach ($admins as $admin)
                                    <option value="{{ $admin->id }}">{{ $admin->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3 mb-5">
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
                        <div class="col-lg-3 mb-5">
                            <x-metronic.label for="division_id"
                                class="col-form-label fw-bold fs-6 required">{{ __('Select Division') }}</x-metronic.label>
                            <select class="form-select" data-kt-repeater="select2" name="division_id"
                                data-hide-search="false" data-placeholder="Select an option">
                                <option></option>
                                @foreach ($divisions as $division)
                                    <option value="{{ $division->id }}" @selected(old('division_id') == $division->id)>
                                        {{ $division->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-lg-3 mb-5">
                            <x-metronic.label for="city_id"
                                class="col-form-label fw-bold fs-6 required">{{ __('Select City') }}</x-metronic.label>
                            <select class="form-select" data-kt-repeater="select2" name="city_id"
                                data-hide-search="false" data-placeholder="Select an option">
                                <option></option>
                                @foreach ($citys as $city)
                                    <option value="{{ $city->id }}" @selected(old('city_id') == $city->id)>{{ $city->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-lg-3 mb-5">
                            <x-metronic.label for="area_id"
                                class="col-form-label fw-bold fs-6 required">{{ __('Select Area') }}</x-metronic.label>
                            <select class="form-select" data-kt-repeater="select2" name="area_id"
                                data-hide-search="false" data-placeholder="Select an option">
                                <option></option>
                                @foreach ($areas as $area)
                                    <option value="{{ $area->id }}" @selected(old('area_id') == $area->id)>
                                        {{ $area->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-3 mb-5">
                            <x-metronic.label for="title"
                                class="col-form-label fw-bold fs-6 required">{{ __('Title') }}
                            </x-metronic.label>

                            <x-metronic.input id="title" type="text" name="title" :value="old('title')"
                                placeholder="Enter the title" required></x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-5">
                            <x-metronic.label for="address_line_one"
                                class="col-form-label fw-bold fs-6 required">{{ __('Address Line One') }}
                            </x-metronic.label>

                            <x-metronic.input id="address_line_one" type="text" name="address_line_one"
                                placeholder="Enter the Address line one"
                                required>{{ old('address_line_one') }}</x-metronic.input>
                        </div>
                        <div class="col-lg-3 mb-5">
                            <x-metronic.label for="address_line_two"
                                class="col-form-label fw-bold fs-6 required">{{ __('Address Line Two') }}
                            </x-metronic.label>

                            <x-metronic.input id="address_line_two" type="text" name="address_line_two"
                                placeholder="Enter the Address Line Two"
                                required>{{ old('address_line_two') }}</x-metronic.input>
                        </div>
                        <div class="col-lg-9 mb-5">
                            <x-metronic.label for="url"
                                class="col-form-label fw-bold fs-6 required">{{ __('Google Map URL') }}
                            </x-metronic.label>

                            <x-metronic.textarea id="url" name="url" :value="old('url')"
                                placeholder="Enter the Google Map URL"
                                required>{{ old('url') }}</x-metronic.textarea>
                        </div>
                        <div class="col-lg-2">
                            <a href="javascript:;" data-repeater-delete
                                class="btn btn-sm btn-light-danger mt-3 mt-md-9">
                                <i class="la la-trash-o fs-3"></i>Delete
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Form group-->

        <!--begin::Form group-->
        <div class="form-group">
            <a href="javascript:;" data-repeater-create class="btn btn-light-primary">
                <i class="la la-plus"></i>Add
            </a>
        </div>
        <!--end::Form group-->
    </div>
</div>


@push('scripts')
    <script>
        $('#offers').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function() {
                $(this).slideDown();

                // Re-init select2
                $(this).find('[data-kt-repeater="select2"]').select2();

                // Re-init flatpickr
                $(this).find('[data-kt-repeater="datepicker"]').flatpickr();

                // Re-init tagify
                new Tagify(this.querySelector('[data-kt-repeater="tagify"]'));
            },

            hide: function(deleteElement) {
                $(this).slideUp(deleteElement);
            },

            ready: function() {
                // Init select2
                $('[data-kt-repeater="select2"]').select2();

                // Init flatpickr
                $('[data-kt-repeater="datepicker"]').flatpickr();

                // Init Tagify
                new Tagify(document.querySelector('[data-kt-repeater="tagify"]'));
            }
        });
    </script>
@endpush
