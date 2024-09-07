<x-admin-app-layout :title="'Store Edit'">
    <div class="card card-flash">

        <div class="card-header mt-6">
            <div class="card-title"></div>


            <div class="card-toolbar">
                <a href="{{ route('admin.store.index') }}" class="btn btn-light-info">
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

            <form class="form" action="{{ route('admin.store.update', $store->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="category_id"
                            class="col-form-label fw-bold fs-6">{{ __('Select a Category') }}</x-metronic.label>
                        <x-metronic.select-option id="category_id" name="category_id" data-hide-search="false"
                            data-placeholder="Select an option">
                            <option></option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $category->id == old('category_id', $store->category_id) ? 'selected' : '' }}>
                                    {{ $category->name }}</option>
                            @endforeach
                        </x-metronic.select-option>
                    </div>
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="country_id"
                            class="col-form-label fw-bold fs-6">{{ __('Select Country') }}</x-metronic.label>
                        <x-metronic.select-option id="country_id" name="country_id[]" data-hide-search="false" multiple
                            data-placeholder="Select an option">
                            <option></option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}"
                                    {{ in_array($country->id, old('country_id', $store->countries->pluck('id')->toArray())) ? 'selected' : '' }}>
                                    {{ $country->name }}</option>
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
                                    {{ in_array($division->id, old('division_id', $store->divisions->pluck('id')->toArray())) ? 'selected' : '' }}>
                                    {{ $division->name }}</option>
                            @endforeach
                        </x-metronic.select-option>
                    </div>
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="city_id"
                            class="col-form-label fw-bold fs-6">{{ __('Select City') }}</x-metronic.label>
                        <x-metronic.select-option id="city_id" name="city_id[]" data-hide-search="false" multiple
                            data-placeholder="Select an option">
                            <option></option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}"
                                    {{ in_array($city->id, old('city_id', $store->cities->pluck('id')->toArray())) ? 'selected' : '' }}>
                                    {{ $city->name }}</option>
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
                                    {{ in_array($area->id, old('area_id', $store->areas->pluck('id')->toArray())) ? 'selected' : '' }}>
                                    {{ $area->name }}</option>
                            @endforeach
                        </x-metronic.select-option>
                    </div>
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="name"
                            class="col-form-label fw-bold fs-6 required">{{ __('Name') }}</x-metronic.label>
                        <x-metronic.input id="name" type="text" name="name" :value="old('name', $store->name)"
                            placeholder="Enter the Name" required></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="url"
                            class="col-form-label fw-bold fs-6 required">{{ __('Url') }}</x-metronic.label>
                        <x-metronic.input id="url" type="url" name="url" :value="old('url', $store->url)"
                            placeholder="Enter the Url"></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="status"
                            class="col-form-label required fw-bold fs-6">{{ __('Select a Status') }}</x-metronic.label>
                        <x-metronic.select-option id="status" name="status" data-hide-search="true"
                            data-placeholder="Select an option">
                            <option></option>
                            <option value="active" {{ old('status', $store->status) == 'active' ? 'selected' : '' }}>
                                Active</option>
                            <option value="inactive"
                                {{ old('status', $store->status) == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </x-metronic.select-option>
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="logo" class="col-form-label fw-bold fs-6 ">{{ __('Logo') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="logo" name="logo" :source="asset('storage/' . $store->logo)"
                            :value="old('logo', $store->logo)"></x-metronic.file-input>
                    </div>
                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="image"
                            class="col-form-label fw-bold fs-6 required">{{ __('Thumbnail Image') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="image" name="image" :source="asset('storage/' . $store->image)"
                            :value="old('image', $store->image)"></x-metronic.file-input>
                    </div>
                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="banner_image"
                            class="col-form-label fw-bold fs-6 ">{{ __('Banner Image') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="banner_image" :source="asset('storage/' . $store->banner_image)" :value="old('banner_image', $store->banner_image)"
                            name="banner_image"></x-metronic.file-input>
                    </div>

                    <div class="col-lg-12 mb-7">
                        <x-metronic.label for="about"
                            class="col-form-label fw-bold fs-6">{{ __('About') }}</x-metronic.label>
                        <textarea id="about" class="ckeditor" name="about">{{ old('about', $store->about) }}</textarea>
                    </div>
                    <div class="col-lg-12 mb-7">
                        <x-metronic.label for="offer_description"
                            class="col-form-label fw-bold fs-6">{{ __('Offer Description') }}</x-metronic.label>
                        <textarea id="offer_description" class="ckeditor" name="offer_description">{{ old('offer_description', $store->offer_description) }}</textarea>
                    </div>
                    <div class="col-lg-12 mb-7">
                        <x-metronic.label for="location"
                            class="col-form-label fw-bold fs-6">{{ __('Location') }}</x-metronic.label>
                        <textarea id="location" class="ckeditor" name="location">{{ old('location', $store->location) }}</textarea>
                    </div>
                    <div class="col-lg-12 mb-7">
                        <x-metronic.label for="description"
                            class="col-form-label fw-bold fs-6">{{ __('Description') }}</x-metronic.label>
                        <textarea id="description" class="ckeditor" name="description">{{ old('description', $store->description) }}</textarea>
                    </div>
                </div>
                <div class="text-center pt-15">
                    <x-metronic.button type="submit" class="primary">{{ __('Update') }}</x-metronic.button>
                </div>
                <div class="text-center pt-15">
                    <x-metronic.button type="submit" class="primary">
                        {{ __('Submit') }}
                    </x-metronic.button>
                </div>

            </form>

        </div>
    </div>
</x-admin-app-layout>
