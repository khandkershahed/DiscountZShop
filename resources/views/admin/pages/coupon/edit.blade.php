<x-admin-app-layout :title="'Coupon Add'">
    <div class="card card-flash">

        <div class="card-header mt-6">
            <div class="card-title"></div>
            <div class="card-toolbar">
                <a href="{{ route('admin.coupon.index') }}" class="btn btn-light-info">
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

            <form class="form" action="{{ route('admin.coupon.update', $coupon->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf

                @method('PUT')

                <div class="row">

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="notify_to"
                            class="col-form-label fw-bold fs-6">{{ __('Select a Notify') }}</x-metronic.label>
                        <x-metronic.select-option id="notify_to" required name="notify_to[]" data-hide-search="false"
                            multiple data-placeholder="Select an option">
                            <option></option>
                            @foreach ($admins as $admin)
                                <option value="{{ $admin->id }}"
                                    {{ in_array($admin->id, old('notify_to', json_decode($coupon->notify_to, true) ?: [])) ? 'selected' : '' }}>
                                    {{ $admin->name }}
                                </option>
                            @endforeach
                        </x-metronic.select-option>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="country_id"
                            class="col-form-label fw-bold fs-6">{{ __('Select Country') }}</x-metronic.label>
                        <x-metronic.select-option id="country_id" required name="country_id[]" data-hide-search="false"
                            multiple data-placeholder="Select an option">
                            <option></option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}"
                                    {{ in_array($country->id, old('country_id', json_decode($coupon->country_id, true) ?: [])) ? 'selected' : '' }}>
                                    {{ $country->name }}
                                </option>
                            @endforeach
                        </x-metronic.select-option>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="division_id"
                            class="col-form-label fw-bold fs-6">{{ __('Select Division') }}</x-metronic.label>
                        <x-metronic.select-option id="division_id" name="division_id[]" data-hide-search="false"
                            multiple data-placeholder="Select an option">
                            <option></option>
                            @foreach ($divisions as $division)
                                <option value="{{ $division->id }}"
                                    {{ in_array($division->id, old('division_id', json_decode($coupon->division_id, true) ?: [])) ? 'selected' : '' }}>
                                    {{ $division->name }}
                                </option>
                            @endforeach
                        </x-metronic.select-option>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="city_id"
                            class="col-form-label fw-bold fs-6">{{ __('Select City') }}</x-metronic.label>
                        <x-metronic.select-option id="city_id" name="city_id[]" data-hide-search="false" multiple
                            data-placeholder="Select an option">
                            <option></option>
                            @foreach ($citys as $city)
                                <option value="{{ $city->id }}"
                                    {{ in_array($city->id, old('city_id', json_decode($coupon->city_id, true) ?: [])) ? 'selected' : '' }}>
                                    {{ $city->name }}
                                </option>
                            @endforeach
                        </x-metronic.select-option>
                    </div>


                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="area_id"
                            class="col-form-label fw-bold fs-6">{{ __('Select Area') }}</x-metronic.label>
                        <x-metronic.select-option id="area_id" name="area_id[]" data-hide-search="false" multiple
                            data-placeholder="Select an option">
                            <option></option>
                            @foreach ($areas as $area)
                                <option value="{{ $area->id }}"
                                    {{ in_array($area->id, old('area_id', json_decode($coupon->area_id, true) ?: [])) ? 'selected' : '' }}>
                                    {{ $area->name }}
                                </option>
                            @endforeach
                        </x-metronic.select-option>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="category_id"
                            class="col-form-label fw-bold fs-6 required">{{ __('Select a Category') }}</x-metronic.label>
                        <x-metronic.select-option id="category_id" name="category_id" data-hide-search="false"
                            data-placeholder="Select an option" required>
                            <option></option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ old('category_id', $coupon->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </x-metronic.select-option>
                    </div>


                    <!-- Update for brand_id -->
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="brand_id"
                            class="col-form-label fw-bold fs-6">{{ __('Select a Brand') }}</x-metronic.label>
                        <x-metronic.select-option id="brand_id" name="brand_id" data-hide-search="false"
                            data-placeholder="Select an option">
                            <option></option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}"
                                    {{ old('brand_id', $coupon->brand_id) == $brand->id ? 'selected' : '' }}>
                                    {{ $brand->name }}
                                </option>
                            @endforeach
                        </x-metronic.select-option>
                    </div>

                    <!-- Update for store_id -->
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="store_id"
                            class="col-form-label fw-bold fs-6">{{ __('Select a Store') }}</x-metronic.label>
                        <x-metronic.select-option id="store_id" name="store_id" data-hide-search="false"
                            data-placeholder="Select an option">
                            <option></option>
                            @foreach ($stores as $store)
                                <option value="{{ $store->id }}"
                                    {{ old('store_id', $coupon->store_id) == $store->id ? 'selected' : '' }}>
                                    {{ $store->name }}
                                </option>
                            @endforeach
                        </x-metronic.select-option>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="name"
                            class="col-form-label fw-bold fs-6 required">{{ __('Name') }}
                        </x-metronic.label>

                        <x-metronic.input id="name" type="text" name="name" value="{{ $coupon->name }}"
                            placeholder="Enter the Name" required></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="url" class="col-form-label fw-bold fs-6">{{ __('Url') }}
                        </x-metronic.label>

                        <x-metronic.input id="url" type="url" name="url" value="{{ $coupon->url }}"
                            placeholder="https://www.google.com"></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="source_url" class="col-form-label fw-bold fs-6">{{ __('Source Url') }}
                        </x-metronic.label>

                        <x-metronic.input id="url" type="url" name="source_url"
                            value="{{ $coupon->source_url }}"
                            placeholder="https://www.google.com"></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="badge" class="col-form-label fw-bold fs-6">{{ __('Badge') }}
                        </x-metronic.label>

                        <x-metronic.input id="badge" type="text" name="badge" value="{{ $coupon->badge }}"
                            placeholder="Eg: 50"></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="tags" class="col-form-label fw-bold fs-6">{{ __('Tags') }}
                        </x-metronic.label>

                        <x-metronic.label class="form-label"></x-metronic.label>
                        <input class="form-control" name="tags" id="tags" value="{{ $coupon->tags }}" />
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="price"
                            class="col-form-label fw-bold fs-6">{{ __('Price') }}
                        </x-metronic.label>

                        <x-metronic.input id="price" type="number" s name="price"
                            value="{{ $coupon->price }}" placeholder="Eg:10,000.00" required></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="offer_price"
                            class="col-form-label fw-bold fs-6">{{ __('Offer Price') }}
                        </x-metronic.label>

                        <x-metronic.input id="offer_price" type="number" s name="offer_price"
                            value="{{ $coupon->offer_price }}" placeholder="Eg:10,000.00"
                            required></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="offer_price"
                            class="col-form-label fw-bold fs-6">{{ __('Coupon Code') }}
                        </x-metronic.label>

                        <x-metronic.input id="coupon_code" type="text" s name="coupon_code"
                            value="{{ $coupon->coupon_code }}" placeholder="Eg: Dis-125874"></x-metronic.input>
                    </div>

                    <div class="col-lg-6 mb-7">
                        <x-metronic.label for="map_url"
                            class="col-form-label fw-bold fs-6 required">{{ __('Map Url') }}
                        </x-metronic.label>

                        <x-metronic.textarea id="map_url" type="text" s name="map_url"
                            placeholder="Please Map Url" required>{!! $coupon->map_url !!}</x-metronic.textarea>
                    </div>

                    <!-- Update for date fields -->
                    <div class="col-lg-2 mb-7">
                        <x-metronic.label for="start_date"
                            class="col-form-label fw-bold fs-6 required">{{ __('Start Date') }}</x-metronic.label>
                        <x-metronic.input id="start_date" type="datetime-local" name="start_date"
                            value="{{ $coupon->start_date }}" required></x-metronic.input>
                    </div>


                    <div class="col-lg-2 mb-7">
                        <x-metronic.label for="start_date"
                            class="col-form-label fw-bold fs-6 required">{{ __('Notification Date') }}
                        </x-metronic.label>

                        <x-metronic.input id="notification_date" type="datetime-local" name="notification_date"
                            value="{{ $coupon->notification_date }}" placeholder="Enter the Coupon Code"
                            required></x-metronic.input>
                    </div>

                    <div class="col-lg-2 mb-7">
                        <x-metronic.label for="start_date"
                            class="col-form-label fw-bold fs-6 required">{{ __('Expiry Date') }}
                        </x-metronic.label>

                        <x-metronic.input id="expiry_date" type="datetime-local" name="expiry_date"
                            value="{{ $coupon->expiry_date }}" placeholder="Enter the Expiry Code"
                            required></x-metronic.input>
                    </div>

                    <div class="col-lg-12 mb-7">
                        <x-metronic.label for="locations" class="col-form-label fw-bold fs-6 ">{{ __('Location') }}
                        </x-metronic.label>

                        <textarea id="locations" class="ckeditor" name="locations">{!! $coupon->locations !!}</textarea>
                    </div>

                    <div class="col-lg-12 mb-7">
                        <x-metronic.label for="description" class="col-form-label fw-bold fs-6 ">{{ __('Description') }}
                        </x-metronic.label>

                        <textarea id="description" class="ckeditor" name="description">{!! $coupon->description !!}</textarea>
                    </div>


                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="logo" class="col-form-label fw-bold fs-6 ">{{ __('Logo') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="logo" name="logo"
                            :value="old('logo')"></x-metronic.file-input>

                        <img class="mt-3"
                            src="{{ !empty($coupon->logo) ? url('storage/' . $coupon->logo) : 'https://ui-avatars.com/api/?name=' . urlencode($coupon->name) }}"
                            height="80" width="80" alt="{{ $coupon->name }}">
                    </div>
                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="image"
                            class="col-form-label fw-bold fs-6">{{ __('Thumbnail Image') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="image" name="image"
                            :value="old('image')"></x-metronic.file-input>

                        <img class="mt-3"
                            src="{{ !empty($coupon->image) ? url('storage/' . $coupon->image) : 'https://ui-avatars.com/api/?name=' . urlencode($coupon->name) }}"
                            height="80" width="80" alt="{{ $coupon->name }}">
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="banner_image"
                            class="col-form-label fw-bold fs-6 ">{{ __('Banner Image') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="banner_image" :value="old('banner_image')"
                            name="banner_image"></x-metronic.file-input>

                        <img class="mt-3"
                            src="{{ !empty($coupon->banner_image) ? url('storage/' . $coupon->banner_image) : 'https://ui-avatars.com/api/?name=' . urlencode($coupon->name) }}"
                            height="80" width="80" alt="{{ $coupon->name }}">
                    </div>

                    <div class="col-lg-8 mb-7">
                        <x-metronic.label for="short_description"
                            class="col-form-label fw-bold fs-6 ">{{ __('Short Description') }}
                        </x-metronic.label>

                        <x-metronic.textarea id="short_description"
                            name="description">{!! $coupon->short_description !!}</x-metronic.textarea>
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="status" class="col-form-label required fw-bold fs-6">
                            {{ __('Select a Status ') }}</x-metronic.label>
                        <x-metronic.select-option id="status" name="status" data-hide-search="true"
                            data-placeholder="Select an option">
                            <option></option>
                            <option value="active" {{ $coupon->status == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $coupon->status == 'inactive' ? 'selected' : '' }}>Inactive
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
