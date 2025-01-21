<div class="desktop-homepage">
    <div class="main-desktop-header">
        <header class="sticky-top bg-light">
            <nav class="navbar navbar-expand-lg py-0">
                <div class="container px-0">
                    <!-- Toggler Button for Mobile View -->
                    <div class="mobile-show w-100">
                        <div class="d-flex justify-content-between align-items-center w-100 p-3">
                            <div>
                                <a href="{{ route('homePage') }}" class="logo-main">
                                    <img class="img-fluid"
                                        src="{{ !empty(optional($setting)->site_logo_black) ? asset('storage/' . optional($setting)->site_logo_black) : asset('frontend/img/logo.png') }}"
                                        alt="Company Logo"
                                        onerror="this.onerror=null; console.error('Primary logo failed to load. Switching to fallback image.'); this.src='http://www.discountzshop.com/storage/webSetting/site_logo_black/oWIkHcvg6U1725872126.png';">
                                </a>
                            </div>
                            <div>
                                <button class="navbar-toggler border-0" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#staticBackdrop" aria-controls="staticBackdrop"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Navigation Links -->
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item d-flex align-items-center">
                                <!-- Current Location -->
                                <a class="nav-link current-location shadow-sm" aria-current="page"
                                    title="Location Wise Current Discount" href="javascript:;">
                                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" width="512" height="512" x="0"
                                        y="0" viewBox="0 0 512 512" style="enable-background: new 0 0 512 512"
                                        xml:space="preserve" class="">
                                        <g>
                                            <path
                                                d="M341.476 338.285c54.483-85.493 47.634-74.827 49.204-77.056C410.516 233.251 421 200.322 421 166 421 74.98 347.139 0 256 0 165.158 0 91 74.832 91 166c0 34.3 10.704 68.091 31.19 96.446l48.332 75.84C118.847 346.227 31 369.892 31 422c0 18.995 12.398 46.065 71.462 67.159C143.704 503.888 198.231 512 256 512c108.025 0 225-30.472 225-90 0-52.117-87.744-75.757-139.524-83.715zm-194.227-92.34a15.57 15.57 0 0 0-.517-.758C129.685 221.735 121 193.941 121 166c0-75.018 60.406-136 135-136 74.439 0 135 61.009 135 136 0 27.986-8.521 54.837-24.646 77.671-1.445 1.906 6.094-9.806-110.354 172.918L147.249 245.945zM256 482c-117.994 0-195-34.683-195-60 0-17.016 39.568-44.995 127.248-55.901l55.102 86.463a14.998 14.998 0 0 0 25.298 0l55.101-86.463C411.431 377.005 451 404.984 451 422c0 25.102-76.313 60-195 60z"
                                                fill="#ffffff" opacity="1" data-original="#000000" class="">
                                            </path>
                                            <path
                                                d="M256 91c-41.355 0-75 33.645-75 75s33.645 75 75 75 75-33.645 75-75-33.645-75-75-75zm0 120c-24.813 0-45-20.187-45-45s20.187-45 45-45 45 20.187 45 45-20.187 45-45 45z"
                                                fill="#ffffff" opacity="1" data-original="#000000" class="">
                                            </path>
                                        </g>
                                    </svg>
                                </a>
                                <div class="dropdown position-static">
                                    <p class="ms-3 mb-2">{{ $city }} ,
                                        {{ $country }}</p>
                                    @if ($categories->count() > 0)
                                        <a href="javascript:void(0)" class="dropdown-toggle ms-3 category-menu"
                                            type="button" id="dropdownMenuClickableInside" data-bs-toggle="dropdown"
                                            data-bs-auto-close="outside" aria-expanded="false">
                                            <span>
                                                Categories
                                                <div class="ps-2">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="22"
                                                        height="22" viewBox="0 0 22 22" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M3.2998 5.4999C3.2998 5.20816 3.4157 4.92838 3.62199 4.72209C3.82828 4.5158 4.10807 4.3999 4.3998 4.3999H17.5998C17.8915 4.3999 18.1713 4.5158 18.3776 4.72209C18.5839 4.92838 18.6998 5.20816 18.6998 5.4999C18.6998 5.79164 18.5839 6.07143 18.3776 6.27772C18.1713 6.48401 17.8915 6.5999 17.5998 6.5999H4.3998C4.10807 6.5999 3.82828 6.48401 3.62199 6.27772C3.4157 6.07143 3.2998 5.79164 3.2998 5.4999ZM3.2998 10.9999C3.2998 10.7082 3.4157 10.4284 3.62199 10.2221C3.82828 10.0158 4.10807 9.8999 4.3998 9.8999H10.9998C11.2915 9.8999 11.5713 10.0158 11.7776 10.2221C11.9839 10.4284 12.0998 10.7082 12.0998 10.9999C12.0998 11.2916 11.9839 11.5714 11.7776 11.7777C11.5713 11.984 11.2915 12.0999 10.9998 12.0999H4.3998C4.10807 12.0999 3.82828 11.984 3.62199 11.7777C3.4157 11.5714 3.2998 11.2916 3.2998 10.9999ZM3.2998 16.4999C3.2998 16.2082 3.4157 15.9284 3.62199 15.7221C3.82828 15.5158 4.10807 15.3999 4.3998 15.3999H17.5998C17.8915 15.3999 18.1713 15.5158 18.3776 15.7221C18.5839 15.9284 18.6998 16.2082 18.6998 16.4999C18.6998 16.7916 18.5839 17.0714 18.3776 17.2777C18.1713 17.484 17.8915 17.5999 17.5998 17.5999H4.3998C4.10807 17.5999 3.82828 17.484 3.62199 17.2777C3.4157 17.0714 3.2998 16.7916 3.2998 16.4999Z"
                                                            fill="#F15A2D" />
                                                    </svg>
                                                </div>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu w-100 border-0 bg-light mt-0 rounded-0 py-0"
                                            aria-labelledby="dropdownMenuButton1"
                                            style="border-top: 2px solid #eee !important;background-image: url({{ asset('frontend') }}/assets/img/shape/shape1.avif);object-fit: fill;">

                                            <div class="container">

                                                <div class="row">
                                                    <div class="col-lg-3 bg-white px-0 category-menus">

                                                        <ul class="nav nav-tabs flex-column border-0" id="myTab"
                                                            role="tablist">

                                                            @foreach ($categories as $header_category)
                                                                <li class="nav-item" role="presentation">
                                                                    <button
                                                                        class="nav-link main-category w-100 border-0 text-start ps-4 rounded-0 {{ $loop->first ? 'active' : '' }}"
                                                                        id="home-{{ $header_category->id }}-tab"
                                                                        data-bs-toggle="tab"
                                                                        data-bs-target="#home-{{ $header_category->id }}"
                                                                        type="button" role="tab"
                                                                        aria-controls="home-{{ $header_category->id }}"
                                                                        aria-selected="true">
                                                                        {{ $header_category->name }}
                                                                    </button>
                                                                </li>
                                                            @endforeach
                                                        </ul>

                                                    </div>
                                                    <div class="col-lg-9">

                                                        <div class="tab-content" id="myTabContent">

                                                            @foreach ($categories as $header_category)
                                                                <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                                                                    id="home-{{ $header_category->id }}"
                                                                    role="tabpanel"
                                                                    aria-labelledby="home-{{ $header_category->id }}-tab">
                                                                    <div class="row py-4 category-menus-show"
                                                                        style="background-color: #eee">
                                                                        @foreach ($header_category->children as $header_category_child)
                                                                            <div class="col-lg-4">

                                                                                <a
                                                                                    href="{{ route('subcategory.details', $header_category_child->slug) }}">
                                                                                    <h6 class="divider-title">
                                                                                        {{ $header_category_child->name }}
                                                                                    </h6>
                                                                                </a>

                                                                                <span class="divider-underline"></span>



                                                                                <ul
                                                                                    class="ps-0 pt-3 main-category-dropdown">
                                                                                    @foreach ($header_category_child->offers as $header_category_offer)
                                                                                        <li class="p-1">
                                                                                            <a
                                                                                                href="{{ route('offer.details', $header_category_offer->slug) }}">{{ $header_category_offer->name }}</a>
                                                                                        </li>
                                                                                    @endforeach
                                                                                </ul>

                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            @endforeach

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </ul>
                                    @endif

                                </div>
                            </li>
                        </ul>
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link custom-nav-link {{ Route::is('homePage') ? 'active' : '' }}"
                                    href="{{ route('homePage') }}">Home <span class="ps-3"> |
                                    </span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link custom-nav-link {{ Route::is(['allOffer', 'offer.details']) ? 'active' : '' }}"
                                    href="{{ route('allOffer') }}">Offers <span class="ps-3"> |
                                    </span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link custom-nav-link {{ Route::is(['allBrand', 'brand.details']) ? 'active' : '' }}"
                                    href="{{ route('allBrand') }}">Brands <span class="ps-3"> |
                                    </span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link custom-nav-link {{ Route::is(['allStore', 'store.details']) ? 'active' : '' }}"
                                    href="{{ route('allStore') }}">Stores <span class="ps-3"></a>
                            </li>

                        </ul>
                        <!-- Search Form -->

                        {{-- <a href="#" class="border-0">
                        <div class="btn-group">
                            <a href="javascript:void(0)" class="border-0 bg-transparent dropdown-toggle custom-toggle"
                                type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="pe-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                        viewBox="0 0 30 30" fill="none">
                                        <g clip-path="url(#clip0_64_445)">
                                            <path
                                                d="M0.9375 9.84376V7.50001C0.941711 7.35668 0.976892 7.21595 1.04063 7.08751L3.32812 2.49376C3.56197 2.02534 3.92193 1.63149 4.36747 1.35655C4.81301 1.0816 5.32645 0.936477 5.85 0.937505H24.15C24.6735 0.936477 25.187 1.0816 25.6325 1.35655C26.0781 1.63149 26.438 2.02534 26.6719 2.49376L28.9594 7.07813C29.0244 7.20943 29.0596 7.3535 29.0625 7.50001V9.84376C29.0614 10.5371 28.8898 11.2196 28.5629 11.831C28.2359 12.4425 27.7636 12.9641 27.1875 13.35V27.1875H28.125C28.3736 27.1875 28.6121 27.2863 28.7879 27.4621C28.9637 27.6379 29.0625 27.8764 29.0625 28.125C29.0625 28.3736 28.9637 28.6121 28.7879 28.7879C28.6121 28.9637 28.3736 29.0625 28.125 29.0625H1.875C1.62636 29.0625 1.3879 28.9637 1.21209 28.7879C1.03627 28.6121 0.9375 28.3736 0.9375 28.125C0.9375 27.8764 1.03627 27.6379 1.21209 27.4621C1.3879 27.2863 1.62636 27.1875 1.875 27.1875H2.8125V13.35C2.23643 12.9641 1.7641 12.4425 1.43713 11.831C1.11016 11.2196 0.938576 10.5371 0.9375 9.84376ZM2.8125 9.84376C2.8125 10.4654 3.05943 11.0615 3.49897 11.501C3.93851 11.9406 4.53465 12.1875 5.15625 12.1875C5.77785 12.1875 6.37399 11.9406 6.81353 11.501C7.25307 11.0615 7.5 10.4654 7.5 9.84376V8.43751H2.8125V9.84376ZM27.1875 9.84376V8.43751H22.5V9.84376C22.5 10.4654 22.7469 11.0615 23.1865 11.501C23.626 11.9406 24.2221 12.1875 24.8438 12.1875C25.4654 12.1875 26.0615 11.9406 26.501 11.501C26.9406 11.0615 27.1875 10.4654 27.1875 9.84376ZM20.625 8.43751H15.9375V9.84376C15.9375 10.4654 16.1844 11.0615 16.624 11.501C17.0635 11.9406 17.6596 12.1875 18.2812 12.1875C18.9029 12.1875 19.499 11.9406 19.9385 11.501C20.3781 11.0615 20.625 10.4654 20.625 9.84376V8.43751ZM14.0625 8.43751H9.375V9.84376C9.375 10.4654 9.62193 11.0615 10.0615 11.501C10.501 11.9406 11.0971 12.1875 11.7188 12.1875C12.3404 12.1875 12.9365 11.9406 13.376 11.501C13.8156 11.0615 14.0625 10.4654 14.0625 9.84376V8.43751ZM24.9937 3.32813C24.9151 3.1721 24.7945 3.04114 24.6454 2.95003C24.4963 2.85892 24.3247 2.81129 24.15 2.81251H5.85C5.67528 2.81129 5.5037 2.85892 5.35462 2.95003C5.20553 3.04114 5.08487 3.1721 5.00625 3.32813L3.39375 6.56251H26.6063L24.9937 3.32813ZM12.1875 27.1875H17.8125V21.5625C17.8125 21.3139 17.7137 21.0754 17.5379 20.8996C17.3621 20.7238 17.1236 20.625 16.875 20.625H13.125C12.8764 20.625 12.6379 20.7238 12.4621 20.8996C12.2863 21.0754 12.1875 21.3139 12.1875 21.5625V27.1875ZM4.6875 27.1875H10.3125V21.5625C10.3125 20.8166 10.6088 20.1012 11.1363 19.5738C11.6637 19.0463 12.3791 18.75 13.125 18.75H16.875C17.6209 18.75 18.3363 19.0463 18.8637 19.5738C19.3912 20.1012 19.6875 20.8166 19.6875 21.5625V27.1875H25.3125V14.0625C25.1573 14.0874 25.0008 14.1031 24.8438 14.1094C24.2109 14.1039 23.5874 13.9562 23.0194 13.677C22.4514 13.3979 21.9535 12.9946 21.5625 12.4969C21.167 12.9862 20.6671 13.3809 20.0994 13.6521C19.5316 13.9233 18.9104 14.064 18.2812 14.064C17.6521 14.064 17.0309 13.9233 16.4631 13.6521C15.8954 13.3809 15.3955 12.9862 15 12.4969C14.6045 12.9862 14.1046 13.3809 13.5369 13.6521C12.9691 13.9233 12.3479 14.064 11.7188 14.064C11.0896 14.064 10.4684 13.9233 9.90062 13.6521C9.33287 13.3809 8.83296 12.9862 8.4375 12.4969C8.04189 12.986 7.54192 13.3804 6.97418 13.6513C6.40644 13.9222 5.78531 14.0627 5.15625 14.0625C5.00014 14.0717 4.84361 14.0717 4.6875 14.0625V27.1875Z"
                                                fill="#252525" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_64_445">
                                                <rect width="30" height="30" fill="white"
                                                    transform="matrix(-1 0 0 1 30 0)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </a>
                            @php
                                $stores = App\Models\Store::latest()->get();
                            @endphp
                            <ul class="dropdown-menu toggler-menu py-3">
                                @foreach ($stores as $store)
                                    <li class="dropdown-item pb-2">
                                        <a href="javascript:;"><i
                                                class="fa-solid fa-house-user main-color pe-2">{{ $store->name }}</i>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                    </a> --}}


                        <form class="d-flex" action="{{ route('product.search') }}" method="POST" role="search">
                            @csrf

                            <div class="d-flex hdr-search align-items-center">

                                <input class="form-control hdr-search-box" autocomplete="on" required name="search"
                                    type="text" placeholder="Search" aria-label="Search" />
                            </div>

                            <button class="btn position-relative border-0 bg-transparent search-action"
                                type="submit">
                                <i class="fa-solid fa-search text-muted"></i>
                            </button>

                        </form>

                        <a href="{{ route('wishlist.product') }}"
                            class="border-0 bg-transparent bt-common bt-common-heart">
                            <i class="fa-regular fa-heart fs-2 fw-normal">
                                <span class="cart-count" id="cartWishlistQty">0</span>
                            </i>
                        </a>

                    </div>
                </div>
            </nav>
        </header>
        <!-- Offcanvas Menu -->
        <div class="offcanvas menu-offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1"
            id="staticBackdrop" aria-labelledby="staticBackdropLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="staticBackdropLabel">
                    <a href="{{ route('homePage') }}" class="logo-main">
                        <img class="img-fluid"
                            src="{{ !empty(optional($setting)->site_logo_black) ? asset('storage/' . optional($setting)->site_logo_black) : asset('frontend/img/logo.png') }}"
                            alt="">
                    </a>
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="pt-3">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item mb-2"
                            style="border-bottom: 1px solid var(--primary-color); width: 50%; margin: auto;">
                            <a class="nav-link custom-nav-link text-center ps-3 {{ Route::is('homePage') ? 'active' : '' }}"
                                href="{{ route('homePage') }}">Home <span class="ps-3">
                                </span></a>
                        </li>
                        <li class="nav-item mb-2"
                            style="border-bottom: 1px solid var(--primary-color); width: 50%; margin: auto;">
                            <a class="nav-link custom-nav-link text-center ps-3 {{ Route::is(['allOffer', 'offer.details']) ? 'active' : '' }}"
                                href="{{ route('allOffer') }}">Offers <span class="ps-3">
                                </span></a>
                        </li>
                        <li class="nav-item mb-2"
                            style="border-bottom: 1px solid var(--primary-color); width: 50%; margin: auto;">
                            <a class="nav-link custom-nav-link text-center ps-3 {{ Route::is(['allBrand', 'brand.details']) ? 'active' : '' }}"
                                href="{{ route('allBrand') }}">Brands <span class="ps-3">
                                </span>
                            </a>
                        </li>
                        <li class="nav-item mb-2"
                            style="border-bottom: 1px solid var(--primary-color); width: 50%; margin: auto;">
                            <a class="nav-link custom-nav-link text-center ps-3 {{ Route::is(['allStore', 'store.details']) ? 'active' : '' }}"
                                href="{{ route('allStore') }}">Store</a>
                        </li>
                        <li class="nav-item mb-2"
                            style="border-bottom: 1px solid var(--primary-color); width: 50%; margin: auto;">
                            <a class="nav-link custom-nav-link text-center ps-3 {{ Route::is('vendors') ? 'active' : '' }}"
                                href="{{ route('vendors') }}">Vendors</a>
                        </li>
                    </ul>
                </div>
                <div class="pt-5">
                    <div class="text-center">
                        <h4>Our Location</h4>
                    </div>
                    <div class="d-flex justify-content-center align-items-center pt-2">
                        <p class="ps-3 company-link">Email: {{ optional($setting)->support_email }}</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-center pt-2">
                        <p class="ps-3 company-link">Call: {{ optional($setting)->primary_phone }}</p>
                    </div>
                    <div class="d-flex justify-content-center align-items-center pt-2">
                        <p class="ps-3 company-link text-center">
                            {{ optional($setting)->address_line_one }} <br />
                            {{ optional($setting)->address_line_two }}
                        </p>
                    </div>
                </div>
                <div>
                    <div class="pt-4 d-flex justify-content-center align-items-center flex-column">
                        <p class="footer-description">Follow us on</p>
                        <div class="pt-1 d-flex justify-content-space-around align-items-center">
                            <a href="{{ optional($setting)->facebook_url }}" class="p-2">
                                <i class="fa-brands fa-facebook-f" style="font-size: 22px"></i>
                            </a>
                            <a href="{{ optional($setting)->twitter_url }}" class="p-2">
                                <i class="fa-brands fa-twitter" style="font-size: 22px"></i>
                            </a>
                            <a href="{{ optional($setting)->linkedin_url }}" class="p-2">
                                <i class="fa-brands fa-linkedin-in" style="font-size: 22px"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="fixed-bottom-footer">
                    <div class="pt-4">
                        <p class="footer-description">
                            {{ optional($setting)->copyright_title }}
                        </p>
                        <div>
                            <a href="{{ route('termsCondition') }}" class="pe-3"
                                style="font-size: 14px; color: #808083;">
                                Terms & Condition
                            </a>
                            <a href="{{ route('privacyPolicy') }}" style="font-size: 14px; color: #808083;">
                                Privacy Policy
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Offcanvas Menu End -->
    </div>
</div>
{{-- Mobile View --}}
<div class="mobile-header fixed-top">
    <header>
        <div class="container-fluid">
            <div class="row py-3 align-items-center">
                <div class="col-6">
                    <div>
                        <button class="btn btn-transparent" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#Id2" aria-controls="Id2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                viewBox="0 0 30 30" fill="none">
                                <g clip-path="url(#clip0_1_2050)">
                                    <path
                                        d="M28.5036 25.8934H8.44273C8.24615 25.8934 8.0515 25.8547 7.86988 25.7794C7.68827 25.7042 7.52324 25.594 7.38424 25.455C7.24524 25.316 7.13498 25.1509 7.05975 24.9693C6.98452 24.7877 6.9458 24.593 6.9458 24.3965C6.9458 24.1999 6.98452 24.0052 7.05975 23.8236C7.13498 23.642 7.24524 23.477 7.38424 23.338C7.52324 23.199 7.68827 23.0887 7.86988 23.0135C8.0515 22.9383 8.24615 22.8995 8.44273 22.8995H28.5031C28.9001 22.8995 29.2809 23.0571 29.5617 23.3378C29.8424 23.6185 30.0002 23.9992 30.0003 24.3962C30.0004 24.7932 29.8427 25.174 29.562 25.4548C29.2813 25.7356 28.9006 25.8933 28.5036 25.8934ZM28.5036 16.4972H8.44273C8.04572 16.4972 7.66497 16.3394 7.38424 16.0587C7.10351 15.778 6.9458 15.3972 6.9458 15.0002C6.9458 14.6032 7.10351 14.2225 7.38424 13.9417C7.66497 13.661 8.04572 13.5033 8.44273 13.5033H28.5031C28.9001 13.5032 29.2809 13.6609 29.5617 13.9416C29.8424 14.2222 30.0002 14.603 30.0003 15C30.0004 15.397 29.8427 15.7778 29.562 16.0585C29.2813 16.3393 28.9006 16.4971 28.5036 16.4972ZM28.5036 7.10092H8.44273C8.24615 7.10092 8.0515 7.0622 7.86988 6.98697C7.68827 6.91174 7.52324 6.80148 7.38424 6.66248C7.24524 6.52347 7.13498 6.35845 7.05975 6.17684C6.98452 5.99522 6.9458 5.80057 6.9458 5.60399C6.9458 5.40741 6.98452 5.21275 7.05975 5.03114C7.13498 4.84952 7.24524 4.6845 7.38424 4.5455C7.52324 4.40649 7.68827 4.29623 7.86988 4.221C8.0515 4.14577 8.24615 4.10706 8.44273 4.10706H28.5031C28.9001 4.10699 29.2809 4.26464 29.5617 4.54532C29.8424 4.826 30.0002 5.20673 30.0003 5.60374C30.0004 6.00075 29.8427 6.38153 29.562 6.6623C29.2813 6.94308 28.9006 7.10085 28.5036 7.10092Z"
                                        fill="white" />
                                    <path
                                        d="M2.01038 7.73014C3.12068 7.73014 4.02076 6.83006 4.02076 5.71976C4.02076 4.60946 3.12068 3.70938 2.01038 3.70938C0.900077 3.70938 0 4.60946 0 5.71976C0 6.83006 0.900077 7.73014 2.01038 7.73014Z"
                                        fill="white" />
                                    <path
                                        d="M2.01038 17.0106C3.12068 17.0106 4.02076 16.1105 4.02076 15.0002C4.02076 13.8899 3.12068 12.9899 2.01038 12.9899C0.900077 12.9899 0 13.8899 0 15.0002C0 16.1105 0.900077 17.0106 2.01038 17.0106Z"
                                        fill="white" />
                                    <path
                                        d="M2.01038 26.2911C3.12068 26.2911 4.02076 25.391 4.02076 24.2807C4.02076 23.1704 3.12068 22.2703 2.01038 22.2703C0.900077 22.2703 0 23.1704 0 24.2807C0 25.391 0.900077 26.2911 2.01038 26.2911Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1_2050">
                                        <rect width="30" height="30" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="col-6">
                    <div class="d-flex justify-content-end">
                        <div class="d-flex align-items-center">
                            <a href="" class="pe-3">
                                <i class="fa-regular fa-heart text-white head-icons"></i>
                                <span class="wish-ammount">0</span>
                            </a>
                            <a href="{{ route('login') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    viewBox="0 0 32 32" fill="none">
                                    <circle cx="16" cy="16" r="16" fill="white" />
                                    <path
                                        d="M8 28.1518H9.77778V23.6128C9.77848 22.9071 10.0556 22.2306 10.5484 21.7316C11.0412 21.2326 11.7093 20.952 12.4062 20.9513H19.5938C20.2907 20.952 20.9588 21.2326 21.4516 21.7316C21.9444 22.2306 22.2215 22.9071 22.2222 23.6128V28.1518H24V23.6128C23.9986 22.4299 23.5339 21.2959 22.7079 20.4595C21.8819 19.6231 20.7619 19.1526 19.5938 19.1512H12.4062C11.2381 19.1526 10.1181 19.6231 9.29211 20.4595C8.46609 21.2959 8.00141 22.4299 8 23.6128V28.1518ZM16 17.351C17.0548 17.351 18.086 17.0343 18.963 16.4409C19.8401 15.8475 20.5237 15.0041 20.9274 14.0173C21.331 13.0305 21.4366 11.9447 21.2309 10.8971C21.0251 9.84954 20.5171 8.88728 19.7712 8.13203C19.0254 7.37677 18.075 6.86244 17.0405 6.65406C16.0059 6.44569 14.9336 6.55263 13.959 6.96137C12.9845 7.37012 12.1515 8.06229 11.5655 8.95038C10.9795 9.83847 10.6667 10.8826 10.6667 11.9507C10.6681 13.3825 11.2304 14.7553 12.2303 15.7677C13.2302 16.7802 14.5859 17.3496 16 17.351ZM16 8.35042C16.7032 8.35042 17.3907 8.56157 17.9754 8.95717C18.5601 9.35277 19.0158 9.91505 19.2849 10.5729C19.554 11.2308 19.6244 11.9547 19.4872 12.653C19.35 13.3514 19.0114 13.9929 18.5142 14.4964C18.0169 14.9999 17.3834 15.3428 16.6937 15.4817C16.0039 15.6207 15.289 15.5494 14.6393 15.2769C13.9897 15.0044 13.4344 14.5429 13.0437 13.9509C12.653 13.3588 12.4444 12.6627 12.4444 11.9507C12.4444 10.9958 12.819 10.0801 13.4858 9.40491C14.1526 8.72973 15.057 8.35042 16 8.35042Z"
                                        fill="#212529" fill-opacity="0.83" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- Mobile Menus --}}
    <div class="offcanvas offcanvas-start w-100" data-bs-backdrop="static" tabindex="-1" id="Id2"
        aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="staticBackdropLabel">
                Offcanvas
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>I will not close if you click outside of me.</div>
        </div>
    </div>
    {{-- Mobile Menus End --}}
</div>
{{-- Mobile View End --}}
