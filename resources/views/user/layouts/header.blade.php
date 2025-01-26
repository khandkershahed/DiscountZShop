<style>
    @media only screen and (max-width: 600px) {
        .wish-ammount {
            line-height: 1.2;
            right: 65px;
            border-radius: 16.13px;
            background: #fff;
            display: flex;
            width: 20px;
            padding: 4px 4px 2px 5px;
            justify-content: center;
            align-items: end;
            position: absolute;
            top: 30px;
            height: 20px;
        }
    }
</style>
<div class="desktop-homepage">
    <div id="kt_header" class="header align-items-stretch">
        <div class="container-fluid d-flex align-items-stretch justify-content-between">
            <div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show aside menu">
                <div class="btn btn-icon btn-active-light-primary w-30px h-30px w-md-40px h-md-40px"
                    id="kt_aside_mobile_toggle">
                    <span class="svg-icon svg-icon-1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <path
                                d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                fill="currentColor" />
                            <path opacity="0.3"
                                d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                fill="currentColor" />
                        </svg>
                    </span>
                </div>
            </div>
            <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
                <a href="../../demo1/dist/index.html" class="d-lg-none">
                    <img alt="Logo" src="{{ asset('admin/assets/media/logos/logo-2.svg') }}" class="h-30px" />
                </a>
            </div>
            <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
                <div class="d-flex align-items-stretch" id="kt_header_nav">
                </div>
                <div class="d-flex align-items-stretch flex-shrink-0">
                    <div class="d-flex align-items-center ms-1 ms-lg-3">
                        <a class="btn btn-icon btn-icon-muted btn-active-light btn-active-color-primary w-30px h-30px w-md-40px h-md-40px"
                            href="../../demo1/dist/documentation/getting-started/dark-mode.html">
                            <i class="fonticon-sun fs-2"></i>
                        </a>
                    </div>

                    <div class="d-flex align-items-center ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
                        <div class="cursor-pointer symbol symbol-30px symbol-md-40px" data-kt-menu-trigger="click"
                            data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
                            <img src="{{ asset('admin/assets/media/avatars/300-1.jpg') }}" alt="user" />
                        </div>
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                            data-kt-menu="true">
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">
                                    <div class="symbol symbol-50px me-5">
                                        <img alt="Logo" src="{{ asset('admin/assets/media/avatars/300-1.jpg') }}" />
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="fw-bolder d-flex align-items-center fs-5">
                                            {{ Auth::user()->name }}
                                        </div>
                                        <a href="#" class="fw-bold text-muted text-hover-primary fs-7">
                                            {{ Auth::user()->email }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="separator my-2"></div>
                            <div class="menu-item px-5">
                                <a href="{{ route('profile.edit') }}" class="menu-link px-5">My
                                    Profile</a>
                            </div>
                            <div class="menu-item px-5 my-1">
                                <a href="../../demo1/dist/account/settings.html" class="menu-link px-5">Account
                                    Settings</a>
                            </div>
                            <div class="menu-item px-5">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                    this.closest('form').submit();"
                                        class="menu-link px-5"> {{ __('Sign Out') }}</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- Mobile View --}}
<div class="mobile-header fixed-top">
    <div class="container">

        <div class="row py-3 align-items-center">
            <div class="col-6">
                <div>
                    <a class="btn btn-transparent" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                        aria-controls="offcanvasExample">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                            fill="none">
                            <g clip-path="url(#clip0_1_2050)">
                                <path
                                    d="M28.5036 25.8934H8.44273C8.24615 25.8934 8.0515 25.8547 7.86988 25.7794C7.68827 25.7042 7.52324 25.594 7.38424 25.455C7.24524 25.316 7.13498 25.1509 7.05975 24.9693C6.98452 24.7877 6.9458 24.593 6.9458 24.3965C6.9458 24.1999 6.98452 24.0052 7.05975 23.8236C7.13498 23.642 7.24524 23.477 7.38424 23.338C7.52324 23.199 7.68827 23.0887 7.86988 23.0135C8.0515 22.9383 8.24615 22.8995 8.44273 22.8995H28.5031C28.9001 22.8995 29.2809 23.0571 29.5617 23.3378C29.8424 23.6185 30.0002 23.9992 30.0003 24.3962C30.0004 24.7932 29.8427 25.174 29.562 25.4548C29.2813 25.7356 28.9006 25.8933 28.5036 25.8934ZM28.5036 16.4972H8.44273C8.04572 16.4972 7.66497 16.3394 7.38424 16.0587C7.10351 15.778 6.9458 15.3972 6.9458 15.0002C6.9458 14.6032 7.10351 14.2225 7.38424 13.9417C7.66497 13.661 8.04572 13.5033 8.44273 13.5033H28.5031C28.9001 13.5032 29.2809 13.6609 29.5617 13.9416C29.8424 14.2222 30.0002 14.603 30.0003 15C30.0004 15.397 29.8427 15.7778 29.562 16.0585C29.2813 16.3393 28.9006 16.4971 28.5036 16.4972ZM28.5036 7.10092H8.44273C8.24615 7.10092 8.0515 7.0622 7.86988 6.98697C7.68827 6.91174 7.52324 6.80148 7.38424 6.66248C7.24524 6.52347 7.13498 6.35845 7.05975 6.17684C6.98452 5.99522 6.9458 5.80057 6.9458 5.60399C6.9458 5.40741 6.98452 5.21275 7.05975 5.03114C7.13498 4.84952 7.24524 4.6845 7.38424 4.5455C7.52324 4.40649 7.68827 4.29623 7.86988 4.221C8.0515 4.14577 8.24615 4.10706 8.44273 4.10706H28.5031C28.9001 4.10699 29.2809 4.26464 29.5617 4.54532C29.8424 4.826 30.0002 5.20673 30.0003 5.60374C30.0004 6.00075 29.8427 6.38153 29.562 6.6623C29.2813 6.94308 28.9006 7.10085 28.5036 7.10092Z"
                                    fill="white"></path>
                                <path
                                    d="M2.01038 7.73014C3.12068 7.73014 4.02076 6.83006 4.02076 5.71976C4.02076 4.60946 3.12068 3.70938 2.01038 3.70938C0.900077 3.70938 0 4.60946 0 5.71976C0 6.83006 0.900077 7.73014 2.01038 7.73014Z"
                                    fill="white"></path>
                                <path
                                    d="M2.01038 17.0106C3.12068 17.0106 4.02076 16.1105 4.02076 15.0002C4.02076 13.8899 3.12068 12.9899 2.01038 12.9899C0.900077 12.9899 0 13.8899 0 15.0002C0 16.1105 0.900077 17.0106 2.01038 17.0106Z"
                                    fill="white"></path>
                                <path
                                    d="M2.01038 26.2911C3.12068 26.2911 4.02076 25.391 4.02076 24.2807C4.02076 23.1704 3.12068 22.2703 2.01038 22.2703C0.900077 22.2703 0 23.1704 0 24.2807C0 25.391 0.900077 26.2911 2.01038 26.2911Z"
                                    fill="white"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_1_2050">
                                    <rect width="30" height="30" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-6">
                <div class="d-flex justify-content-end">
                    <div class="d-flex align-items-center pe-4">
                        <a href="" class="me-3">
                            <i class="fa-regular fa-heart text-white head-icons" aria-hidden="true"></i>
                            <span class="wish-ammount">0</span>
                        </a>
                        <a href="http://127.0.0.1:8000/login" class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32"
                                fill="none">
                                <circle cx="16" cy="16" r="16" fill="white"></circle>
                                <path
                                    d="M8 28.1518H9.77778V23.6128C9.77848 22.9071 10.0556 22.2306 10.5484 21.7316C11.0412 21.2326 11.7093 20.952 12.4062 20.9513H19.5938C20.2907 20.952 20.9588 21.2326 21.4516 21.7316C21.9444 22.2306 22.2215 22.9071 22.2222 23.6128V28.1518H24V23.6128C23.9986 22.4299 23.5339 21.2959 22.7079 20.4595C21.8819 19.6231 20.7619 19.1526 19.5938 19.1512H12.4062C11.2381 19.1526 10.1181 19.6231 9.29211 20.4595C8.46609 21.2959 8.00141 22.4299 8 23.6128V28.1518ZM16 17.351C17.0548 17.351 18.086 17.0343 18.963 16.4409C19.8401 15.8475 20.5237 15.0041 20.9274 14.0173C21.331 13.0305 21.4366 11.9447 21.2309 10.8971C21.0251 9.84954 20.5171 8.88728 19.7712 8.13203C19.0254 7.37677 18.075 6.86244 17.0405 6.65406C16.0059 6.44569 14.9336 6.55263 13.959 6.96137C12.9845 7.37012 12.1515 8.06229 11.5655 8.95038C10.9795 9.83847 10.6667 10.8826 10.6667 11.9507C10.6681 13.3825 11.2304 14.7553 12.2303 15.7677C13.2302 16.7802 14.5859 17.3496 16 17.351ZM16 8.35042C16.7032 8.35042 17.3907 8.56157 17.9754 8.95717C18.5601 9.35277 19.0158 9.91505 19.2849 10.5729C19.554 11.2308 19.6244 11.9547 19.4872 12.653C19.35 13.3514 19.0114 13.9929 18.5142 14.4964C18.0169 14.9999 17.3834 15.3428 16.6937 15.4817C16.0039 15.6207 15.289 15.5494 14.6393 15.2769C13.9897 15.0044 13.4344 14.5429 13.0437 13.9509C12.653 13.3588 12.4444 12.6627 12.4444 11.9507C12.4444 10.9958 12.819 10.0801 13.4858 9.40491C14.1526 8.72973 15.057 8.35042 16 8.35042Z"
                                    fill="#212529" fill-opacity="0.83"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Mobile Menus --}}

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
        aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <a href="{{ route('homePage') }}" class="logo-main">
                <img class="img-fluid"
                    src="{{ !empty(optional($setting)->site_logo_black) ? asset('storage/' . optional($setting)->site_logo_black) : asset('frontend/img/logo.png') }}"
                    alt="">
            </a>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <div>
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
            </div>
        </div>
    </div>
    <!--end::View component-->
</div>
{{-- Mobile View End --}}
