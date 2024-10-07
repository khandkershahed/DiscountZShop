<x-admin-app-layout :title="'Page Banner Edit'">
    <div class="card card-flash">

        <div class="card-header mt-6">
            <div class="card-title"></div>


            <div class="card-toolbar">

                <a href="{{ route('admin.page-banner.index') }}" class="btn btn-light-info rounded-2">

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

            <form class="form" action="{{ route('admin.page-banner.update', $banner->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf

                @method('PUT')

                <div class="row">
                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="name"
                            class="col-form-label fw-bold fs-6 required">{{ __('Page Name') }}
                        </x-metronic.label>
                        <x-metronic.select-option id="page_name" name="page_name" data-hide-search="true"
                            data-placeholder="Select an option">
                            <option></option>
                            <option value="contact" {{ $banner->page_name == 'contact' ? 'selected' : '' }}>Contact Us
                            </option>
                            <option value="about" {{ $banner->page_name == 'about' ? 'selected' : '' }}>About Us
                            </option>
                            <option value="offer" {{ $banner->page_name == 'offer' ? 'selected' : '' }}>Offer All
                            </option>
                            <option value="store" {{ $banner->page_name == 'store' ? 'selected' : '' }}>Store All
                            </option>
                            <option value="brand" {{ $banner->page_name == 'brand' ? 'selected' : '' }}>Brand All
                            </option>
                            <option value="coupon" {{ $banner->page_name == 'coupon' ? 'selected' : '' }}>Coupon All
                            </option>
                            <option value="faq" {{ $banner->page_name == 'faq' ? 'selected' : '' }}>FAQ</option>
                            <option value="terms" {{ $banner->page_name == 'terms' ? 'selected' : '' }}>Terms &
                                Condition</option>
                            <option value="privacy" {{ $banner->page_name == 'privacy' ? 'selected' : '' }}>Privacy
                                Policy</option>
                        </x-metronic.select-option>
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="image"
                            class="col-form-label fw-bold fs-6">{{ __('Thumbnail Image') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="image" name="image" :value="old('image')"></x-metronic.file-input>

                        <img class="mt-3"
                            src="{{ !empty($banner->image) ? url('storage/' . $banner->image) : 'https://ui-avatars.com/api/?name=' . urlencode($banner->page_name) }}"
                            height="80" width="80" alt="{{ $banner->page_name }}">
                    </div>

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="badge" class="col-form-label fw-bold fs-6 ">{{ __('Badge') }}
                        </x-metronic.label>

                        <x-metronic.input id="badge" type="text" name="badge" placeholder="Enter the Badge"
                            :value="old('badge', $banner->badge)"></x-metronic.input>
                    </div>
                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="button_name"
                            class="col-form-label fw-bold fs-6 ">{{ __('Button Name') }}
                        </x-metronic.label>

                        <x-metronic.input id="button_name" type="text" name="button_name"
                            placeholder="Enter the Button Name" :value="old('button_name', $banner->button_name)"></x-metronic.input>
                    </div>
                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="button_link"
                            class="col-form-label fw-bold fs-6 ">{{ __('Button Link') }}
                        </x-metronic.label>

                        <x-metronic.input id="button_link" type="url" name="button_link"
                            placeholder="Enter the Button Link" :value="old('button_link', $banner->button_link)"></x-metronic.input>
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
