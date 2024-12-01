<x-frontend-app-layout :title="'About Us || DiscountZShop'">

    <!-- Hero Section -->
    <section>
        <div class="regular-banner">
            <img class="img-fluid w-100"
                src="{{ !empty(optional($page_banner)->image) && file_exists(public_path('storage/' . optional($page_banner)->image)) ? asset('storage/' . optional($page_banner)->image) : asset('images/no-banner(1920-330).png') }}"
                alt="{{ ucfirst(optional($page_banner)->page_name) }}" />
        </div>
    </section>
    <!-- Services -->

    <section>
        <div class="container py-5">

            <div class="row">

                @if (!empty(optional($about)->row_one_column_one_icon) || !empty(optional($about)->row_one_column_one_title))
                    <div class="col-lg-4">
                        <div class="about-box">
                            <div>
                                <img style="width: 80px;height: 80px;"
                                    src="{{ !empty(optional($about)->row_one_column_one_icon) ? url('storage/' . optional($about)->row_one_column_one_icon) : 'https://ui-avatars.com/api/?name=Default' }}"
                                    alt="">
                            </div>
                            <h4 class="pt-3">{{ optional($about)->row_one_column_one_title }}</h4>
                            <p class="pt-3 pb-3">
                                {{ Str::words(optional($about)->row_one_column_one_description, 20, '...') }}
                            </p>
                            <a href="{{ optional($about)->row_one_column_one_url }}" class="main-color">Learn More <i
                                    class="fa-solid fa-arrow-right-long ps-2"></i></a>
                        </div>
                    </div>
                @endif

                @if (!empty(optional($about)->row_one_column_two_icon) || !empty(optional($about)->row_one_column_two_title))
                    <div class="col-lg-4">
                        <div class="about-box">
                            <div>
                                <img style="width: 80px;height: 80px;"
                                    src="{{ !empty(optional($about)->row_one_column_two_icon) ? url('storage/' . optional($about)->row_one_column_two_icon) : 'https://ui-avatars.com/api/?name=Default' }}"
                                    alt="">
                            </div>
                            <h4 class="pt-3">{{ optional($about)->row_one_column_two_title }}</h4>
                            <p class="pt-3 pb-3">
                                {{ Str::words(optional($about)->row_one_column_two_description, 20, '...') }}
                            </p>
                            <a href="{{ optional($about)->row_one_column_two_url }}" class="main-color">Learn More <i
                                    class="fa-solid fa-arrow-right-long ps-2"></i></a>
                        </div>
                    </div>
                @endif

                @if (!empty(optional($about)->row_one_column_three_icon) || !empty(optional($about)->row_one_column_three_title))
                    <div class="col-lg-4">
                        <div class="about-box">
                            <img style="width: 80px;height: 80px;"
                                src="{{ !empty(optional($about)->row_one_column_three_icon) ? url('storage/' . optional($about)->row_one_column_three_icon) : 'https://ui-avatars.com/api/?name=Default' }}"
                                alt="">
                            <h4 class="pt-3">{{ optional($about)->row_one_column_three_title }}</h4>
                            <p class="pt-3 pb-3">
                                {{ Str::words(optional($about)->row_one_column_three_description, 20, '...') }}
                            </p>
                            <a href="{{ optional($about)->row_one_column_three_url }}" class="main-color">Learn More <i
                                    class="fa-solid fa-arrow-right-long ps-2"></i></a>
                        </div>
                    </div>
                @endif

            </div>

        </div>
    </section>
    <!-- Service End -->

    <!-- Who Start -->
    @if (!empty(optional($about)->row_two_title) || !empty(optional($about)->row_two_title))
        <section>
            <div class="container py-5 my-5 mt-0">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div>
                            <img class="w-100 img-fluid rounded-3"
                                src="{{ !empty($about->row_two_image) ? url('storage/' . $about->row_two_image) : asset('images/no-image(random).png') }}" alt="" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <p class="main-color fw-bold pb-4">{{ optional($about)->row_two_badge }}</p>
                        <h1 class="pb-4">{{ optional($about)->row_two_title }}</h1>
                        <p>
                            {!! optional($about)->row_two_description !!}
                        </p>
                        @if (!empty(optional($about)->row_two_button_url) || !empty(optional($about)->row_two_button_name))
                            <div class="pt-4">
                                <a href="{{ optional($about)->row_two_button_url }}"
                                    class="btn-common-one">{{ optional($about)->row_two_button_name }}</a>
                            </div>
                        @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    <!-- Who End -->

    <!-- Amount Start -->
    @if (!empty(optional($about)->row_five_bg_image))
        <section class="fixed-background py-5"
            style="background-image: url({{ asset('storage/' . optional($about)->row_five_bg_image) }})">
            <div class="container">
                <div id="counter">
                    @foreach (['one', 'two', 'three', 'four'] as $index)
                        <div class="item">
                            <div>
                                <img style="width: 60px; height: 60px;"
                                    src="{{ optional($about)->{'row_five_column_' . $index . '_icon'} ? asset('storage/' . optional($about)->{'row_five_column_' . $index . '_icon'}) : 'https://ui-avatars.com/api/?name=Default' }}"
                                    alt="{{ optional($about)->{'row_five_column_' . $index . '_title'} }}">
                            </div>
                            <h1 class="count" data-number="50"></h1>
                            <a href="{{ optional($about)->{'row_five_column_' . $index . '_url'} }}">
                                <h5 class="text-black">{{ optional($about)->{'row_five_column_' . $index . '_title'} }}
                                </h5>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif



</x-frontend-app-layout>
