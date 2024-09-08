<x-admin-app-layout :title="'HomePage Top Right Banners Update'">
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

            <form class="form" action="{{ route('admin.banner.update', $banner->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf

                @method('PUT')

                <div class="row">

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="image_one" class="col-form-label fw-bold fs-6 ">{{ __('Image One') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="image_one" name="image_one"
                            :value="old('image_one')"></x-metronic.file-input>

                        <img class="mt-3"
                            src="{{ !empty($banner->image_one) ? url('storage/' . $banner->image_one) : 'https://ui-avatars.com/api/?name=' . urlencode($banner->name) }}"
                            height="80" width="80" alt="{{ $banner->name }}">
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="image_two" class="col-form-label fw-bold fs-6 ">{{ __('Image Two') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="image_two" name="image_two"
                            :value="old('image_two')"></x-metronic.file-input>

                        <img class="mt-3"
                            src="{{ !empty($banner->image_two) ? url('storage/' . $banner->image_two) : 'https://ui-avatars.com/api/?name=' . urlencode($banner->name) }}"
                            height="80" width="80" alt="{{ $banner->name }}">
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="image_three" class="col-form-label fw-bold fs-6 ">{{ __('Image Three') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="image_three" name="image_three"
                            :value="old('image_three')"></x-metronic.file-input>

                        <img class="mt-3"
                            src="{{ !empty($banner->image_three) ? url('storage/' . $banner->image_three) : 'https://ui-avatars.com/api/?name=' . urlencode($banner->name) }}"
                            height="80" width="80" alt="{{ $banner->name }}">
                    </div>



                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="status" class="col-form-label required fw-bold fs-6">
                            {{ __('Select a Status ') }}</x-metronic.label>
                        <x-metronic.select-option id="status" name="status" data-hide-search="true"
                            data-placeholder="Select an option">
                            <option></option>
                            <option value="active" {{ $banner->status == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $banner->status == 'inactive' ? 'selected' : '' }}>Inactive
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


</x-admin-app-layout>
