<x-admin-app-layout :title="'HomePage Add'">
    <div class="card card-flash">

        <div class="card-header mt-6">
            <div class="card-title"></div>
            <div class="card-toolbar">
                <a href="{{ route('admin.homepage.index') }}" class="btn btn-light-info">
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

            <form class="form" action="{{ route('admin.homepage.update', $homepage->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf

                @method('PUT')

                <div class="row">

                    <div class="col-lg-4 mb-7">
                        <x-metronic.label for="top_banner" class="col-form-label fw-bold fs-6 ">{{ __('Top Banner') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="top_banner" name="top_banner"
                            :value="old('top_banner')"></x-metronic.file-input>

                        <img class="mt-3"
                            src="{{ !empty($homepage->top_banner) ? url('storage/' . $homepage->top_banner) : asset('images/no_logo.png') }}"
                            height="80" width="80" alt="">
                    </div>

                    <div class="col-lg-8 mb-7">
                        <x-metronic.label for="top_banner_link"
                            class="col-form-label fw-bold fs-6 required">{{ __('Top Banner Link') }}
                        </x-metronic.label>

                        <x-metronic.input id="top_banner_link" type="text" value="{{ $homepage->top_banner_link }}"
                            name="top_banner_link" placeholder="Enter Top Banner Link"></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="deal_title"
                            class="col-form-label fw-bold fs-6 required">{{ __('Deal Title') }}
                        </x-metronic.label>

                        <x-metronic.input id="deal_title" type="text" value="{{ $homepage->deal_title }}"
                            name="deal_title" placeholder="Enter Deal Title"></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="deal_header"
                            class="col-form-label fw-bold fs-6 required">{{ __('Deal Header') }}
                        </x-metronic.label>

                        <x-metronic.input id="deal_header" type="text" value="{{ $homepage->deal_header }}"
                            name="deal_header" placeholder="Enter Deal Header"></x-metronic.input>
                    </div>

                    <!-- Update for brand_id -->
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="deal_brand_id"
                            class="col-form-label fw-bold fs-6">{{ __('Select a Brand') }}</x-metronic.label>
                        <x-metronic.select-option id="deal_brand_id" name="deal_brand_id" data-hide-search="false"
                            data-placeholder="Select an option">
                            <option></option>
                            @foreach ($brands as $brand)
                                <option value="{{ $brand->id }}"
                                    {{ old('brand_id', $homepage->brand_id) == $brand->id ? 'selected' : '' }}>
                                    {{ $brand->name }}
                                </option>
                            @endforeach
                        </x-metronic.select-option>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="deal_brand_image"
                            class="col-form-label fw-bold fs-6 ">{{ __('Deal Brand Image') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="deal_brand_image" name="deal_brand_image"
                            :value="old('deal_brand_image')"></x-metronic.file-input>

                        <img class="mt-3"
                            src="{{ !empty($homepage->deal_brand_image) ? url('storage/' . $homepage->deal_brand_image) : asset('images/no_logo.png') }}"
                            height="80" width="80" alt="">
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="offer_slider_image_one"
                            class="col-form-label fw-bold fs-6 ">{{ __('Offer Slider Image One') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="offer_slider_image_one" name="offer_slider_image_one"
                            :value="old('offer_slider_image_one')"></x-metronic.file-input>

                        <img class="mt-3"
                            src="{{ !empty($homepage->offer_slider_image_one) ? url('storage/' . $homepage->offer_slider_image_one) : asset('images/no_logo.png') }}"
                            height="80" width="80" alt="">
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="offer_slider_image_one_link"
                            class="col-form-label fw-bold fs-6">{{ __('Offer Slider Image One Link') }}
                        </x-metronic.label>

                        <x-metronic.input id="offer_slider_image_one_link" type="text" name="offer_slider_image_one_link" :value="old('offer_slider_image_one_link',$homepage->offer_slider_image_one_link)"
                            placeholder="offer Slider Image One Link"></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="offer_slider_image_two"
                            class="col-form-label fw-bold fs-6 ">{{ __('Offer Slider Image Two') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="offer_slider_image_two" name="offer_slider_image_two"
                            :value="old('offer_slider_image_two')"></x-metronic.file-input>

                        <img class="mt-3"
                            src="{{ !empty($homepage->offer_slider_image_two) ? url('storage/' . $homepage->offer_slider_image_two) : asset('images/no_logo.png') }}"
                            height="80" width="80" alt="">
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="offer_slider_image_two_link"
                            class="col-form-label fw-bold fs-6">{{ __('Offer Slider Image Two Link') }}
                        </x-metronic.label>

                        <x-metronic.input id="offer_slider_image_two_link" type="text" name="offer_slider_image_two_link" :value="old('offer_slider_image_two_link',$homepage->offer_slider_image_two_link)"
                            placeholder="offer Slider Image Two Link"></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="offer_slider_image_three"
                            class="col-form-label fw-bold fs-6 ">{{ __('Offer Slider Image Three') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="offer_slider_image_three" name="offer_slider_image_three"
                            :value="old('offer_slider_image_three')"></x-metronic.file-input>

                        <img class="mt-3"
                            src="{{ !empty($homepage->offer_slider_image_three) ? url('storage/' . $homepage->offer_slider_image_three) : asset('images/no_logo.png') }}"
                            height="80" width="80" alt="">
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="offer_slider_image_three_link"
                            class="col-form-label fw-bold fs-6">{{ __('Offer Slider Image Three Link') }}
                        </x-metronic.label>

                        <x-metronic.input id="offer_slider_image_three_link" type="text" name="offer_slider_image_three_link" :value="old('offer_slider_image_three_link',$homepage->offer_slider_image_three_link)"
                            placeholder="offer Slider Image Three Link"></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="offer_slider_image_four"
                            class="col-form-label fw-bold fs-6 ">{{ __('Offer Slider Image Four') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="offer_slider_image_four" name="offer_slider_image_four"
                            :value="old('offer_slider_image_four')"></x-metronic.file-input>

                        <img class="mt-3"
                            src="{{ !empty($homepage->offer_slider_image_four) ? url('storage/' . $homepage->offer_slider_image_four) : asset('images/no_logo.png') }}"
                            height="80" width="80" alt="">
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="offer_slider_image_four_link"
                            class="col-form-label fw-bold fs-6">{{ __('Offer Slider Image Four Link') }}
                        </x-metronic.label>

                        <x-metronic.input id="offer_slider_image_four_link" type="text" name="offer_slider_image_four_link" :value="old('offer_slider_image_four_link',$homepage->offer_slider_image_four_link)"
                            placeholder="offer Slider Image Four Link"></x-metronic.input>
                    </div>


                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="bottom_banner_slider_one"
                            class="col-form-label fw-bold fs-6 ">{{ __('Bottom Banner Slider One') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="bottom_banner_slider_one" name="bottom_banner_slider_one"
                            :value="old('bottom_banner_slider_one')"></x-metronic.file-input>

                        <img class="mt-3"
                            src="{{ !empty($homepage->bottom_banner_slider_one) ? url('storage/' . $homepage->bottom_banner_slider_one) : asset('images/no_logo.png') }}"
                            height="80" width="80" alt="">
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="bottom_banner_slider_one_link"
                            class="col-form-label fw-bold fs-6 required">{{ __('Bottom Banner Slider One Link') }}
                        </x-metronic.label>

                        <x-metronic.input id="bottom_banner_slider_one_link" type="text"
                            name="bottom_banner_slider_one_link"
                            value="{{ $homepage->bottom_banner_slider_one_link }}"
                            placeholder="Enter Bottom Banner Slider One Link"></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="bottom_banner_slider_two"
                            class="col-form-label fw-bold fs-6 ">{{ __('Bottom Banner Slider Two') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="bottom_banner_slider_two" name="bottom_banner_slider_two"
                            :value="old('bottom_banner_slider_two')"></x-metronic.file-input>

                        <img class="mt-3"
                            src="{{ !empty($homepage->bottom_banner_slider_two) ? url('storage/' . $homepage->bottom_banner_slider_two) : asset('images/no_logo.png') }}"
                            height="80" width="80" alt="">
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="bottom_banner_slider_two_link"
                            class="col-form-label fw-bold fs-6 required">{{ __('Bottom Banner Slider Two Link') }}
                        </x-metronic.label>

                        <x-metronic.input id="bottom_banner_slider_two_link" type="text"
                            name="bottom_banner_slider_two_link"
                            value="{{ $homepage->bottom_banner_slider_two_link }}"
                            placeholder="Enter Bottom Banner Slider Two Link"></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="bottom_banner_slider_three"
                            class="col-form-label fw-bold fs-6 ">{{ __('Bottom Banner Slider Three') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="bottom_banner_slider_three" name="bottom_banner_slider_three"
                            :value="old('bottom_banner_slider_three')"></x-metronic.file-input>
                            <img class="mt-3"
                                    src="{{ !empty($homepage->bottom_banner_slider_three) ? url('storage/' . $homepage->bottom_banner_slider_three) : asset('images/no_logo.png') }}"
                                    height="80" width="80" alt="">
                    </div>


                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="bottom_banner_slider_three_link"
                            class="col-form-label fw-bold fs-6 required">{{ __('Bottom Banner Slider Three Link') }}
                        </x-metronic.label>

                        <x-metronic.input id="bottom_banner_slider_three_link" type="text"
                            name="bottom_banner_slider_three_link"
                            value="{{ $homepage->bottom_banner_slider_three_link }}"
                            placeholder="Enter Bottom Banner Slider Three Link"></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="bottom_banner_slider_four"
                            class="col-form-label fw-bold fs-6 ">{{ __('Bottom Banner Slider Four') }}
                        </x-metronic.label>

                        <x-metronic.file-input id="bottom_banner_slider_four" name="bottom_banner_slider_four"
                            :value="old('bottom_banner_slider_four')"></x-metronic.file-input>

                        <img class="mt-3"
                            src="{{ !empty($homepage->bottom_banner_slider_four) ? url('storage/' . $homepage->bottom_banner_slider_four) : asset('images/no_logo.png') }}"
                            height="80" width="80" alt="">
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="bottom_banner_slider_four_link"
                            class="col-form-label fw-bold fs-6 required">{{ __('Bottom Banner Slider Four Link') }}
                        </x-metronic.label>

                        <x-metronic.input id="bottom_banner_slider_four_link" type="text"
                            name="bottom_banner_slider_four_link"
                            value="{{ $homepage->bottom_banner_slider_four_link }}"
                            placeholder="Enter Bottom Banner Slider Four Link"></x-metronic.input>
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
