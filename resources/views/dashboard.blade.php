<x-app-layout>
    <style>
        .slick-dots {
            left: auto;
            position: absolute;
            bottom: -30px;
            display: flex;
            justify-content: center;
            /* Ensures dots are centered */
            gap: 5px;
            /* Adds consistent space between dots */
        }
    </style>

    {{-- <div id="kt_content_container" class="container-xxl">
        <div class="py-5 desktop-homepage">
            <div class="row gy-5 g-xl-8">
                <div class="col-xl-4">
                    <div class="card card-xl-stretch">
                        <div class="card-header border-0 bg-danger py-5">
                            <h3 class="card-title fw-bolder text-white">Sales Statistics</h3>
                            <div class="card-toolbar">
                                <button type="button"
                                    class="btn btn-sm btn-icon btn-color-white btn-active-white btn-active-color- border-0 me-n3"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <span class="svg-icon svg-icon-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px"
                                            viewBox="0 0 24 24">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="5" y="5" width="5" height="5" rx="1"
                                                    fill="currentColor" />
                                                <rect x="14" y="5" width="5" height="5" rx="1"
                                                    fill="currentColor" opacity="0.3" />
                                                <rect x="5" y="14" width="5" height="5" rx="1"
                                                    fill="currentColor" opacity="0.3" />
                                                <rect x="14" y="14" width="5" height="5" rx="1"
                                                    fill="currentColor" opacity="0.3" />
                                            </g>
                                        </svg>
                                    </span>
                                </button>
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                    data-kt-menu="true">
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                            Payments</div>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Create Invoice</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3">Create
                                            Payment
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="Specify a target name for future usage and reference"></i></a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3">Generate Bill</a>
                                    </div>
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-end">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Subscription</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Plans</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Billing</a>
                                            </div>
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">Statements</a>
                                            </div>
                                            <div class="separator my-2"></div>
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3">
                                                    <label
                                                        class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input w-30px h-20px" type="checkbox"
                                                            value="1" checked="checked" name="notifications" />
                                                        <span class="form-check-label text-muted fs-6">Recuring</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3">Settings</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="mixed-widget-2-chart card-rounded-bottom bg-danger" data-kt-color="danger"
                                style="height: 200px"></div>
                            <div class="card-p mt-n20 position-relative">
                                <div class="row g-0">
                                    <div class="col bg-light-warning px-6 py-8 rounded-2 me-7 mb-7">
                                        <span class="svg-icon svg-icon-3x svg-icon-warning d-block my-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <rect x="8" y="9" width="3" height="10" rx="1.5"
                                                    fill="currentColor" />
                                                <rect opacity="0.5" x="13" y="5" width="3" height="14"
                                                    rx="1.5" fill="currentColor" />
                                                <rect x="18" y="11" width="3" height="8" rx="1.5"
                                                    fill="currentColor" />
                                                <rect x="3" y="13" width="3" height="6" rx="1.5"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <a href="#" class="text-warning fw-bold fs-6">Weekly
                                            Sales</a>
                                    </div>
                                    <div class="col bg-light-primary px-6 py-8 rounded-2 mb-7">
                                        <span class="svg-icon svg-icon-3x svg-icon-primary d-block my-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <a href="#" class="text-primary fw-bold fs-6">New
                                            Projects</a>
                                    </div>
                                </div>
                                <div class="row g-0">
                                    <div class="col bg-light-danger px-6 py-8 rounded-2 me-7">
                                        <span class="svg-icon svg-icon-3x svg-icon-danger d-block my-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3"
                                                    d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                    fill="currentColor" />
                                                <path
                                                    d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <a href="#" class="text-danger fw-bold fs-6 mt-2">Item
                                            Orders</a>
                                    </div>
                                    <div class="col bg-light-success px-6 py-8 rounded-2">
                                        <span class="svg-icon svg-icon-3x svg-icon-success d-block my-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                    fill="currentColor" />
                                                <path opacity="0.3"
                                                    d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                    fill="currentColor" />
                                            </svg>
                                        </span>
                                        <a href="#" class="text-success fw-bold fs-6 mt-2">Bug
                                            Reports</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="mobile-homepage w-100 bg-white" style="padding-bottom: 9rem">
        <div class="p-0">
            <div class="container-fluid pt-5 "
                style="background: linear-gradient(180deg, #F15A2D 10%, rgb(255 255 255 / 0%) 100%);width: 100%;height: 296px; padding-top: 80px;">
                <div class="row align-items-centers px-5 pt-10">
                    <div class="col-8">
                        <div class="user-info">
                            <img src="{{ asset('admin/assets/media/avatars/300-1.jpg') }}" alt="">
                            <div class="ps-2">
                                <h2 class="text-white">{{ Auth::user()->name }}</h2>
                                <div class="d-flex align-items-centers">
                                    <span class="text-white">{{ Auth::user()->email }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="d-flex justify-content-end align-items-center pt-5 text-end">
                            <div class="">
                                <a href="javascript:void(0)" class="" data-bs-toggle="modal"
                                    data-bs-target="#user-search">
                                    <span style="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                            viewBox="0 0 24 25" fill="none">
                                            <path
                                                d="M23.3561 22.9272L17.4839 17.0551C19.0841 15.098 19.8709 12.6006 19.6815 10.0797C19.4921 7.55875 18.341 5.20704 16.4662 3.511C14.5915 1.81497 12.1366 0.90437 9.60928 0.967559C7.08198 1.03075 4.67564 2.06289 2.88801 3.8505C1.10038 5.6381 0.0682254 8.0444 0.00503493 10.5717C-0.0581555 13.0989 0.852456 15.5538 2.54852 17.4285C4.24458 19.3032 6.59632 20.4543 9.11731 20.6437C11.6383 20.8331 14.1356 20.0464 16.0928 18.4461L21.965 24.3183C22.1506 24.4975 22.3991 24.5966 22.657 24.5944C22.915 24.5922 23.1617 24.4887 23.3441 24.3063C23.5265 24.1239 23.63 23.8771 23.6322 23.6192C23.6345 23.3613 23.5353 23.1128 23.3561 22.9272ZM9.87132 18.7039C8.31472 18.7039 6.79308 18.2423 5.49881 17.3775C4.20455 16.5127 3.19579 15.2836 2.60011 13.8455C2.00442 12.4074 1.84857 10.825 2.15224 9.2983C2.45592 7.77163 3.20549 6.3693 4.30618 5.26864C5.40686 4.16797 6.80921 3.41841 8.3359 3.11474C9.86259 2.81106 11.445 2.96692 12.8832 3.56259C14.3213 4.15827 15.5504 5.16701 16.4152 6.46126C17.28 7.7555 17.7416 9.27712 17.7416 10.8337C17.7393 12.9203 16.9093 14.9207 15.4339 16.3962C13.9584 17.8716 11.9579 18.7015 9.87132 18.7039Z"
                                                fill="white" />
                                        </svg>
                                    </span>
                                </a>
                            </div>

                            {{-- <div class="dropdown position-static ps-3">
                                <a href="javascript:void(0)" type="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <span class="" style="margin-right: -20px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="23"
                                            viewBox="0 0 21 23" fill="none">
                                            <path
                                                d="M0.7456 13.1067L2.45185 6.88555C2.95197 5.063 4.03889 3.46216 5.53985 2.33749C7.04081 1.21283 8.86967 0.628873 10.7357 0.678453C12.6018 0.728033 14.3979 1.4083 15.8387 2.61113C17.2794 3.81396 18.2821 5.47031 18.6872 7.31691L20.0082 13.337C20.1542 14.0022 20.1508 14.6921 19.9984 15.3558C19.846 16.0195 19.5484 16.64 19.1277 17.1715C18.7069 17.7031 18.1737 18.1321 17.5675 18.4269C16.9612 18.7217 16.2974 18.8747 15.625 18.8747H14.6246C14.4185 19.9033 13.8678 20.8281 13.0658 21.4923C12.2639 22.1566 11.26 22.5195 10.2243 22.5195C9.18851 22.5195 8.18462 22.1566 7.38267 21.4923C6.58073 20.8281 6.03004 19.9033 5.82393 18.8747H5.07139C4.37918 18.8747 3.69633 18.7126 3.07619 18.4009C2.45605 18.0893 1.91541 17.6365 1.49651 17.0781C1.0776 16.5196 0.79178 15.8706 0.661362 15.1817C0.530945 14.4928 0.560366 13.7826 0.7456 13.1067ZM10.2243 20.6948C10.7795 20.6925 11.3204 20.5163 11.7731 20.1905C12.2257 19.8647 12.568 19.4052 12.7531 18.8747H7.69542C7.88049 19.4052 8.22277 19.8647 8.67543 20.1905C9.1281 20.5163 9.66904 20.6925 10.2243 20.6948ZM2.9269 15.9761C3.17714 16.3126 3.50135 16.5852 3.87378 16.7724C4.2462 16.9596 4.65657 17.0562 5.07229 17.0546H15.625C16.0284 17.0545 16.4266 16.9626 16.7903 16.7857C17.154 16.6088 17.4738 16.3514 17.7262 16.0325C17.9786 15.7135 18.1571 15.3413 18.2485 14.9431C18.3399 14.5449 18.3419 14.131 18.2544 13.7319L16.9343 7.71097C16.6161 6.26052 15.8286 4.9595 14.6969 4.01472C13.5653 3.06993 12.1545 2.53562 10.6887 2.4967C9.22303 2.45779 7.78654 2.91652 6.60763 3.79996C5.42873 4.6834 4.57506 5.94086 4.18234 7.37243L2.4761 13.5936C2.36335 13.9989 2.3454 14.4253 2.42365 14.8389C2.50191 15.2524 2.67422 15.6418 2.9269 15.9761Z"
                                                fill="white" />
                                        </svg>
                                        <span class="badge bg-black amount-value rounded-circle">00</span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu full-container-dropdown px-0">
                                    <div>
                                        asdasdasd
                                    </div>
                                </ul>
                            </div> --}}

                        </div>
                    </div>
                </div>

                <div class="row pt-5 mt-5">

                    {{-- <div class="col-lg-12">
                        <div class="card mx-2 shadow-none"
                            style="border-radius: 20px 20px 0px 0px; margin-top: 25px;">
                            <div class="card-body shadow-none p-8 py-15">
                                <div class="row">
                                    <div class="col-6 mb-8">
                                        <div class="d-flex align-items-center">
                                            <span><svg xmlns="http://www.w3.org/2000/svg" width="28"
                                                    height="24" viewBox="0 0 28 24" fill="none">
                                                    <path
                                                        d="M24.4641 4.65983H5.82479C5.33351 4.65893 4.84789 4.55487 4.39937 4.35439C3.95086 4.15391 3.54944 3.86149 3.22111 3.49604C3.54844 3.12919 3.94961 2.83566 4.39831 2.6347C4.84702 2.43373 5.33313 2.32987 5.82479 2.32991H26.794C27.103 2.32991 27.3993 2.20718 27.6178 1.98871C27.8362 1.77023 27.959 1.47392 27.959 1.16496C27.959 0.855991 27.8362 0.55968 27.6178 0.341208C27.3993 0.122736 27.103 0 26.794 0H5.82479C4.27996 0 2.7984 0.613681 1.70604 1.70604C0.613681 2.7984 0 4.27996 0 5.82479L0 17.4744C0 19.0192 0.613681 20.5007 1.70604 21.5931C2.7984 22.6855 4.27996 23.2991 5.82479 23.2991H24.4641C25.391 23.2991 26.2799 22.9309 26.9353 22.2755C27.5908 21.6201 27.959 20.7312 27.959 19.8043V8.1547C27.959 7.2278 27.5908 6.33887 26.9353 5.68345C26.2799 5.02804 25.391 4.65983 24.4641 4.65983ZM25.6291 19.8043C25.6291 20.4462 25.1072 20.9692 24.4641 20.9692H5.82479C3.89795 20.9692 2.32991 19.4012 2.32991 17.4744V5.82246C3.33834 6.57857 4.56437 6.98806 5.82479 6.98974H24.4641C25.1072 6.98974 25.6291 7.51281 25.6291 8.1547V19.8043ZM23.2991 13.9795C23.2991 14.2885 23.1764 14.5848 22.9579 14.8032C22.7395 15.0217 22.4432 15.1444 22.1342 15.1444C21.8252 15.1444 21.5289 15.0217 21.3104 14.8032C21.092 14.5848 20.9692 14.2885 20.9692 13.9795C20.9692 13.6705 21.092 13.3742 21.3104 13.1557C21.5289 12.9373 21.8252 12.8145 22.1342 12.8145C22.4432 12.8145 22.7395 12.9373 22.9579 13.1557C23.1764 13.3742 23.2991 13.6705 23.2991 13.9795Z"
                                                        fill="#1F1F1F" />
                                                </svg></span>
                                            <small class="ps-2 mb-0">Your Balance Point</small>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-8">
                                        <div class="d-flex align-items-center">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                    viewBox="0 0 26 26" fill="none">
                                                    <rect width="26" height="26" rx="8.66667"
                                                        fill="#F0F0F0" />
                                                    <path
                                                        d="M10.4699 5.77783H16.49C18.1497 5.77783 19.5 7.12813 19.5 8.78786V18.4175C19.5 19.161 19.0533 19.8196 18.3628 20.0947C17.6711 20.3716 16.8945 20.1989 16.366 19.6402L13.4806 16.3262L10.5777 19.6589C10.3297 19.9222 10.0081 20.1046 9.65489 20.1822C9.30165 20.2599 8.9332 20.2292 8.59769 20.0941C8.26143 19.9614 7.97302 19.7303 7.77014 19.4311C7.56727 19.1319 7.45935 18.7784 7.4605 18.4169V8.78786C7.4605 7.12813 8.8102 5.77783 10.4699 5.77783ZM8.66391 18.4175C8.66391 18.7962 8.95407 18.9407 9.04257 18.9768C9.13106 19.0123 9.4417 19.1062 9.68611 18.8504L13.026 15.015C13.0823 14.9498 13.152 14.8975 13.2303 14.8616C13.3087 14.8257 13.3938 14.8072 13.4799 14.8072C13.5661 14.8072 13.6512 14.8257 13.7296 14.8616C13.8079 14.8975 13.8776 14.9498 13.9339 15.015L17.2569 18.8317C17.5176 19.1062 17.8276 19.0117 17.9173 18.9768C18.0058 18.9407 18.296 18.7962 18.296 18.4175V8.78786C18.296 7.79214 17.4857 6.98184 16.49 6.98184H10.4699C9.47421 6.98184 8.66391 7.79214 8.66391 8.78786V18.4175ZM10.5006 10.3194C10.4653 10.416 10.4605 10.5211 10.487 10.6206C10.5135 10.72 10.57 10.8088 10.6487 10.875L11.8353 11.8418L11.3446 13.3372C11.3118 13.436 11.3106 13.5424 11.341 13.6419C11.3714 13.7414 11.4321 13.829 11.5145 13.8925C11.5969 13.956 11.697 13.9923 11.801 13.9963C11.905 14.0004 12.0076 13.972 12.0947 13.9151L13.4763 13.0151L14.8351 13.9242C14.9214 13.9822 15.0236 14.012 15.1276 14.0093C15.2316 14.0066 15.3322 13.9716 15.4154 13.9091C15.4985 13.8468 15.5601 13.7602 15.5919 13.6613C15.6238 13.5625 15.6241 13.4562 15.593 13.3571L15.121 11.8442L16.3136 10.8738C16.3922 10.8075 16.4485 10.7187 16.4748 10.6193C16.5012 10.5199 16.4963 10.4148 16.4609 10.3183C16.4254 10.2218 16.3611 10.1385 16.2767 10.0798C16.1923 10.0211 16.0919 9.98974 15.9891 9.99006H14.4835L13.9507 8.49528C13.9151 8.39929 13.851 8.31649 13.7669 8.25802C13.6829 8.19956 13.5829 8.16822 13.4806 8.16822C13.3782 8.16822 13.2782 8.19956 13.1942 8.25802C13.1101 8.31649 13.046 8.39929 13.0104 8.49528L12.4776 9.99006H10.972C10.7613 9.99006 10.5729 10.1213 10.5006 10.3194Z"
                                                        fill="#252525" />
                                                </svg>
                                            </span>
                                            <div class="ps-2">
                                                <h2 class="mb-0 ps-2">12</h2>
                                                <p class="ps-2 mb-0">Favorite Brands</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                    viewBox="0 0 26 26" fill="none">
                                                    <rect width="26" height="26" rx="8.66667"
                                                        fill="#F0F0F0" />
                                                    <path
                                                        d="M10.4699 5.77783H16.49C18.1497 5.77783 19.5 7.12813 19.5 8.78786V18.4175C19.5 19.161 19.0533 19.8196 18.3628 20.0947C17.6711 20.3716 16.8945 20.1989 16.366 19.6402L13.4806 16.3262L10.5777 19.6589C10.3297 19.9222 10.0081 20.1046 9.65489 20.1822C9.30165 20.2599 8.9332 20.2292 8.59769 20.0941C8.26143 19.9614 7.97302 19.7303 7.77014 19.4311C7.56727 19.1319 7.45935 18.7784 7.4605 18.4169V8.78786C7.4605 7.12813 8.8102 5.77783 10.4699 5.77783ZM8.66391 18.4175C8.66391 18.7962 8.95407 18.9407 9.04257 18.9768C9.13106 19.0123 9.4417 19.1062 9.68611 18.8504L13.026 15.015C13.0823 14.9498 13.152 14.8975 13.2303 14.8616C13.3087 14.8257 13.3938 14.8072 13.4799 14.8072C13.5661 14.8072 13.6512 14.8257 13.7296 14.8616C13.8079 14.8975 13.8776 14.9498 13.9339 15.015L17.2569 18.8317C17.5176 19.1062 17.8276 19.0117 17.9173 18.9768C18.0058 18.9407 18.296 18.7962 18.296 18.4175V8.78786C18.296 7.79214 17.4857 6.98184 16.49 6.98184H10.4699C9.47421 6.98184 8.66391 7.79214 8.66391 8.78786V18.4175ZM10.5006 10.3194C10.4653 10.416 10.4605 10.5211 10.487 10.6206C10.5135 10.72 10.57 10.8088 10.6487 10.875L11.8353 11.8418L11.3446 13.3372C11.3118 13.436 11.3106 13.5424 11.341 13.6419C11.3714 13.7414 11.4321 13.829 11.5145 13.8925C11.5969 13.956 11.697 13.9923 11.801 13.9963C11.905 14.0004 12.0076 13.972 12.0947 13.9151L13.4763 13.0151L14.8351 13.9242C14.9214 13.9822 15.0236 14.012 15.1276 14.0093C15.2316 14.0066 15.3322 13.9716 15.4154 13.9091C15.4985 13.8468 15.5601 13.7602 15.5919 13.6613C15.6238 13.5625 15.6241 13.4562 15.593 13.3571L15.121 11.8442L16.3136 10.8738C16.3922 10.8075 16.4485 10.7187 16.4748 10.6193C16.5012 10.5199 16.4963 10.4148 16.4609 10.3183C16.4254 10.2218 16.3611 10.1385 16.2767 10.0798C16.1923 10.0211 16.0919 9.98974 15.9891 9.99006H14.4835L13.9507 8.49528C13.9151 8.39929 13.851 8.31649 13.7669 8.25802C13.6829 8.19956 13.5829 8.16822 13.4806 8.16822C13.3782 8.16822 13.2782 8.19956 13.1942 8.25802C13.1101 8.31649 13.046 8.39929 13.0104 8.49528L12.4776 9.99006H10.972C10.7613 9.99006 10.5729 10.1213 10.5006 10.3194Z"
                                                        fill="#252525" />
                                                </svg>
                                            </span>
                                            <div class="ps-2 mb-0">
                                                <h4 class="mb-0">2350 <small>Point</small></h4>
                                                <smal class="mb-0">Valid till 31 Jan, 2025</smal>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26"
                                                    viewBox="0 0 26 26" fill="none">
                                                    <rect width="26" height="26" rx="8.66667"
                                                        fill="#F0F0F0" />
                                                    <path
                                                        d="M16.2131 7C15.5561 7.01022 14.9135 7.19362 14.35 7.53168C13.7866 7.86974 13.3224 8.35048 13.0042 8.92537C12.686 8.35048 12.2217 7.86974 11.6583 7.53168C11.0949 7.19362 10.4522 7.01022 9.79522 7C8.7479 7.0455 7.76116 7.50366 7.05057 8.27438C6.33997 9.0451 5.9633 10.0657 6.00282 11.1133C6.00282 13.7662 8.7952 16.6636 11.1371 18.6281C11.66 19.0675 12.3212 19.3084 13.0042 19.3084C13.6872 19.3084 14.3483 19.0675 14.8712 18.6281C17.2132 16.6636 20.0055 13.7662 20.0055 11.1133C20.0451 10.0657 19.6684 9.0451 18.9578 8.27438C18.2472 7.50366 17.2604 7.0455 16.2131 7ZM14.1215 17.7354C13.8087 17.9988 13.413 18.1432 13.0042 18.1432C12.5953 18.1432 12.1996 17.9988 11.8869 17.7354C8.88913 15.2202 7.16972 12.807 7.16972 11.1133C7.12983 10.3751 7.38347 9.65102 7.87531 9.09906C8.36716 8.54711 9.0573 8.21202 9.79522 8.16689C10.5331 8.21202 11.2233 8.54711 11.7151 9.09906C12.207 9.65102 12.4606 10.3751 12.4207 11.1133C12.4207 11.268 12.4822 11.4164 12.5916 11.5259C12.701 11.6353 12.8494 11.6967 13.0042 11.6967C13.1589 11.6967 13.3073 11.6353 13.4167 11.5259C13.5261 11.4164 13.5876 11.268 13.5876 11.1133C13.5477 10.3751 13.8014 9.65102 14.2932 9.09906C14.7851 8.54711 15.4752 8.21202 16.2131 8.16689C16.951 8.21202 17.6412 8.54711 18.133 9.09906C18.6249 9.65102 18.8785 10.3751 18.8386 11.1133C18.8386 12.807 17.1192 15.2202 14.1215 17.7331V17.7354Z"
                                                        fill="black" />
                                                </svg>
                                            </span>
                                            <div class="ps-2">
                                                <h2 class="mb-0 ps-2">12</h2>
                                                <p class="mb-0 ps-2">Your Wishlist</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-5 mx-2 shadow-none card special-offers" style="margin-top: -15px">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex px-5 align-items-center">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                                            viewBox="0 0 30 30" fill="none">
                                            <path
                                                d="M23.9075 13.1247H15.9385L16.8757 1.40499L6.09497 16.8754H14.064L13.125 28.5933L23.9075 13.1247Z"
                                                fill="#F15A2D" />
                                            <path
                                                d="M16.8523 0.937223C16.7811 0.940954 16.7116 0.960933 16.6493 0.995633C16.5869 1.03033 16.5334 1.07883 16.4927 1.13742L5.71016 16.6043C5.66098 16.6745 5.63198 16.7568 5.62628 16.8424C5.62059 16.9279 5.63842 17.0134 5.67785 17.0895C5.71728 17.1656 5.7768 17.2295 5.84996 17.2742C5.92312 17.3189 6.00711 17.3427 6.09284 17.3431H13.5534L12.6587 28.5578C12.6233 29.0327 13.2363 29.2523 13.5091 28.8626L24.2916 13.3957C24.3409 13.3254 24.3699 13.2429 24.3755 13.1572C24.3812 13.0715 24.3632 12.9859 24.3235 12.9097C24.2839 12.8335 24.2241 12.7697 24.1507 12.7251C24.0773 12.6805 23.993 12.657 23.9072 12.6569H15.9381C15.3127 12.6569 15.3127 13.5959 15.9381 13.5959H23.0107L13.7306 26.9049L14.5296 16.9125C14.5353 16.8478 14.5274 16.7827 14.5066 16.7212C14.4857 16.6597 14.4524 16.6031 14.4086 16.5552C14.3648 16.5072 14.3115 16.4689 14.2522 16.4426C14.1928 16.4163 14.1286 16.4025 14.0637 16.4023H6.98932L16.2712 3.0916L15.6192 11.2166C15.5537 11.8508 16.5157 11.9305 16.5547 11.2927L17.3431 1.44215C17.3484 1.37561 17.3396 1.30869 17.317 1.24586C17.2945 1.18302 17.2588 1.12571 17.2123 1.07776C17.1659 1.02981 17.1098 0.992309 17.0477 0.96777C16.9856 0.94323 16.919 0.933984 16.8523 0.937223Z"
                                                fill="#252525" />
                                        </svg>
                                    </span>
                                    <span class="fs-2 fw-bold">Super Deals</span>
                                </div>
                                <div class="pe-5">
                                    <button class="btn btn-white fw-bold">Check</button>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>

                {{-- <div class="row mx-3">
                    <div class="col-12 px-0">
                        <div class="pt-10 d-flex justify-content-between align-items-center">
                            <div>
                                <h4>Trending Now</h4>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="site-text fw-bold pe-2">See all</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                    viewBox="0 0 15 15" fill="none">
                                    <path
                                        d="M1.25306 8.12489L12.2443 8.12489L8.93619 11.433C8.87649 11.4907 8.82888 11.5596 8.79612 11.6359C8.76337 11.7121 8.74613 11.7941 8.74541 11.8771C8.74469 11.9601 8.7605 12.0424 8.79192 12.1192C8.82335 12.196 8.86976 12.2658 8.92844 12.3245C8.98712 12.3832 9.05691 12.4296 9.13372 12.461C9.21053 12.4925 9.29283 12.5083 9.37581 12.5075C9.4588 12.5068 9.54081 12.4896 9.61707 12.4568C9.69332 12.4241 9.76228 12.3765 9.81994 12.3168L14.1949 7.94176C14.3121 7.82456 14.3779 7.66562 14.3779 7.49989C14.3779 7.33416 14.3121 7.17522 14.1949 7.05801L9.81994 2.68301C9.70206 2.56916 9.54419 2.50617 9.38031 2.50759C9.21644 2.50901 9.05968 2.57474 8.9438 2.69062C8.82792 2.8065 8.76219 2.96326 8.76077 3.12714C8.75934 3.29101 8.82234 3.44889 8.93619 3.56676L12.2443 6.87489L1.25306 6.87489C1.0873 6.87489 0.928332 6.94073 0.811121 7.05794C0.693911 7.17515 0.628064 7.33413 0.628064 7.49989C0.628064 7.66565 0.693911 7.82462 0.811121 7.94183C0.928332 8.05904 1.0873 8.12489 1.25306 8.12489Z"
                                        fill="black" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>

        {{-- <div class="" style="margin-top: 13rem">
            <div class="container">
                <div class="row mx-0">
                    <div class="col-lg-12">
                        <div class="mt-5">
                            <div class="custom-slider pt-3">
                                <div>
                                    <a href="/">
                                        <img class="img-fluid fixed-size rounded-2"
                                            src="http://discountzshop.com/storage/banner/image_one/NYvnUTNIS51731239526.jpg"
                                            alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="/">
                                        <img class="img-fluid fixed-size rounded-2"
                                            src="http://discountzshop.com/storage/banner/image_one/NYvnUTNIS51731239526.jpg"
                                            alt="" />
                                    </a>
                                </div>
                                <div>
                                    <a href="/">
                                        <img class="img-fluid fixed-size rounded-2"
                                            src="http://discountzshop.com/storage/banner/image_one/NYvnUTNIS51731239526.jpg"
                                            alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card p-3 rounded-3 border" style="background-color: #F8F8F8;">
                        <div class="card-body p-0">
                            <div class="row pt-2">
                                <div class="col-lg-12">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h4>Browse by Category</h4>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <span class="site-text fw-bold pe-2">See all</span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                viewBox="0 0 15 15" fill="none">
                                                <path
                                                    d="M1.25306 8.12489L12.2443 8.12489L8.93619 11.433C8.87649 11.4907 8.82888 11.5596 8.79612 11.6359C8.76337 11.7121 8.74613 11.7941 8.74541 11.8771C8.74469 11.9601 8.7605 12.0424 8.79192 12.1192C8.82335 12.196 8.86976 12.2658 8.92844 12.3245C8.98712 12.3832 9.05691 12.4296 9.13372 12.461C9.21053 12.4925 9.29283 12.5083 9.37581 12.5075C9.4588 12.5068 9.54081 12.4896 9.61707 12.4568C9.69332 12.4241 9.76228 12.3765 9.81994 12.3168L14.1949 7.94176C14.3121 7.82456 14.3779 7.66562 14.3779 7.49989C14.3779 7.33416 14.3121 7.17522 14.1949 7.05801L9.81994 2.68301C9.70206 2.56916 9.54419 2.50617 9.38031 2.50759C9.21644 2.50901 9.05968 2.57474 8.9438 2.69062C8.82792 2.8065 8.76219 2.96326 8.76077 3.12714C8.75934 3.29101 8.82234 3.44889 8.93619 3.56676L12.2443 6.87489L1.25306 6.87489C1.0873 6.87489 0.928332 6.94073 0.811121 7.05794C0.693911 7.17515 0.628064 7.33413 0.628064 7.49989C0.628064 7.66565 0.693911 7.82462 0.811121 7.94183C0.928332 8.05904 1.0873 8.12489 1.25306 8.12489Z"
                                                    fill="black" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row px-3 py-3 ps-0">
                                <div class="col-3 mb-3">
                                    <a href="#" class="">
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="83" height="83"
                                                viewBox="0 0 83 83" fill="none">
                                                <g filter="url(#filter0_d_1_991)">
                                                    <rect x="2" y="2" width="75" height="75" rx="37.5"
                                                        fill="#F8F8F9" />
                                                    <path
                                                        d="M56.4846 45.6465L53.5596 39.6663C53.5018 39.5486 53.3817 39.4724 53.25 39.4724H52.0624C51.7782 38.8928 51.263 38.4634 50.6392 38.2925C51.0897 37.9993 51.4109 37.556 51.5426 37.0341C51.7389 36.4223 51.7043 35.7573 51.3647 35.1985C51.062 34.6859 50.5676 34.3327 49.99 34.2034C50.1586 34.0926 50.3111 33.9586 50.4428 33.8062C50.7362 33.4622 50.2164 33.0143 49.9184 33.356C49.5626 33.7693 48.9919 33.9494 48.4674 33.8178L43.1188 32.4578C42.7468 32.3632 42.4349 32.1276 42.2362 31.7975C42.0375 31.4673 41.982 31.0794 42.0768 30.7077L42.1322 30.486C42.2269 30.1143 42.4626 29.8026 42.793 29.604C43.1257 29.4077 43.5116 29.35 43.8835 29.4447L49.2321 30.8046C49.6942 30.9224 50.0685 31.2641 50.2326 31.7167C50.2973 31.8968 50.4959 31.9891 50.6738 31.9245C50.8541 31.8598 50.9465 31.6612 50.8818 31.4835C50.6415 30.8139 50.087 30.3105 49.4031 30.1373L48.3473 29.8695L48.5298 29.1537C48.6407 28.722 48.576 28.2717 48.3473 27.8884C48.1185 27.5052 47.7558 27.2327 47.3214 27.1219C46.8894 27.011 46.4388 27.0757 46.0553 27.3043C45.6741 27.5306 45.3968 27.8977 45.2883 28.3295L45.1057 29.0452L44.0499 28.7774C43.5 28.6365 42.927 28.722 42.4349 29.0129C41.9451 29.3038 41.5962 29.7679 41.4576 30.3174L41.4021 30.5391C41.2704 31.0609 41.3374 31.6012 41.5939 32.0745L41.5223 32.0561C40.9724 31.9152 40.3994 32.0007 39.9073 32.2916C39.4152 32.5825 39.0686 33.0466 38.93 33.5961L38.8745 33.8178C38.7729 34.2126 38.789 34.6259 38.9184 35.0115C38.3131 34.6859 37.6662 34.4966 36.98 34.4435C39.1171 33.0882 39.131 31.4811 38.9669 30.6753C38.6943 29.3523 37.7886 28.4888 37.4952 28.2394C37.4259 28.027 37.2411 27.519 36.9107 26.9048C38.0751 26.6624 38.5511 26.069 38.7428 25.5841C39.0848 24.716 38.7474 23.543 37.8579 22.5271C37.1163 21.6797 35.9403 21.3865 34.9283 21.8021C34.1243 22.1323 33.6067 22.8319 33.4912 23.6908C32.5578 23.3329 31.4211 23.1921 30.051 23.4738C28.681 23.7555 27.6921 24.335 26.9758 25.03C26.5322 24.2842 25.7768 23.8455 24.9103 23.8617C23.8175 23.8801 22.8517 24.6121 22.5052 25.6834C22.0893 26.9672 22.2418 28.1771 22.9003 28.842C23.1868 29.1307 23.6534 29.41 24.3951 29.41C24.6077 29.41 24.8433 29.3869 25.1044 29.3338C25.042 30.0265 25.0744 30.5668 25.0952 30.7885C24.9242 31.1325 24.4321 32.2823 24.7047 33.6054C24.8249 34.1918 25.2407 35.2724 26.6709 35.8981C27.0637 36.0713 27.5073 36.196 27.9994 36.2791C26.5138 37.0457 25.8414 38.3318 25.5457 39.477H24.8849C24.7532 39.477 24.6331 39.5532 24.5753 39.6709L21.6503 45.6511C21.5671 45.8219 21.6365 46.0297 21.8097 46.1129C21.856 46.136 21.9091 46.1475 21.9622 46.1475H24.5407V55.8866C24.5407 56.0782 24.6954 56.2306 24.8849 56.2306H53.2407C53.4325 56.2306 53.585 56.0759 53.585 55.8866V46.1475H56.1634C56.3552 46.1475 56.5077 45.9928 56.5077 45.8035C56.5077 45.7504 56.4961 45.6996 56.473 45.6511L56.4846 45.6465ZM45.9606 28.498C46.023 28.2463 46.187 28.0293 46.4111 27.8977C46.6352 27.7638 46.9009 27.7245 47.1551 27.7915C47.6795 27.9254 47.9961 28.4588 47.8644 28.9829L47.6819 29.6986L45.7804 29.2161L45.9629 28.5003L45.9606 28.498ZM51.2468 39.4724H42.2801C42.1045 38.9252 41.6147 37.616 40.6605 36.4661L48.9503 38.5742L50.4289 38.9506C50.7501 39.0337 51.0366 39.2161 51.2468 39.4724ZM39.5469 33.984L39.6023 33.7624C39.697 33.3906 39.9327 33.0789 40.2631 32.8804C40.5958 32.6841 40.9816 32.6264 41.3536 32.721L49.886 34.8914C50.7547 35.1062 51.1752 36.0459 50.8702 36.8633C50.7755 37.235 50.5399 37.5467 50.2095 37.7453C49.8768 37.9415 49.4909 37.9993 49.1189 37.9046L40.5866 35.7342C39.8172 35.5379 39.3482 34.7529 39.5446 33.984H39.5469ZM41.5477 39.4724H39.9535C38.9023 37.2604 37.851 35.8173 36.7767 35.12C37.4698 35.15 38.1167 35.3371 38.7105 35.6788C40.3763 36.6416 41.2335 38.6019 41.5477 39.4701V39.4724ZM27.3848 33.4022C27.431 32.3424 28.2535 31.3495 29.5497 30.7238C29.5912 31.0494 29.7761 31.3518 30.0764 31.5827C30.423 31.8506 30.8874 31.996 31.3587 31.996C31.3911 31.996 31.4257 31.996 31.4581 31.9937L31.6914 33.132C30.4415 33.2775 29.7691 32.721 29.7391 32.698C29.5935 32.5756 29.3764 32.5917 29.2516 32.7372C29.1315 32.8804 29.1453 33.0928 29.284 33.2175C29.3186 33.2475 30.021 33.8478 31.2871 33.8478C31.5574 33.8478 31.8531 33.8201 32.172 33.7554C33.9926 33.3814 34.5887 32.1738 34.6118 32.123C34.6927 31.9522 34.621 31.749 34.4501 31.6659C34.2791 31.5827 34.0735 31.6543 33.988 31.8229C33.9695 31.8575 33.5698 32.6356 32.3661 32.9935L32.1327 31.8552C32.604 31.6774 33.0107 31.3426 33.2394 30.9316C33.4242 30.5991 33.4727 30.2505 33.3803 29.9342C34.8197 29.9965 35.968 30.5853 36.4301 31.5412C36.8575 32.4278 36.608 33.4437 35.7462 34.3304C35.4967 34.4481 35.2056 34.5659 34.9191 34.6721C34.2467 34.9192 33.4473 35.1454 32.4978 35.3417C31.2039 35.6072 30.0695 35.7227 29.1014 35.6903C27.967 35.2147 27.3409 34.3835 27.3825 33.4022H27.3848ZM32.2482 29.9642C32.2875 29.9642 32.3245 29.9642 32.3615 29.9688C32.5463 29.9803 32.6826 30.0219 32.7126 30.0981C32.7819 30.2897 32.6965 30.4929 32.6387 30.5968C32.4562 30.9247 32.0726 31.1925 31.6637 31.2757C31.2548 31.3611 30.7973 31.2664 30.4992 31.0378C30.4045 30.9639 30.2451 30.8116 30.2335 30.6084C30.3467 30.1905 31.83 29.9757 32.2505 29.9665L32.2482 29.9642ZM30.0579 36.3669C30.8412 36.3253 31.7007 36.2098 32.6364 36.0182C33.6114 35.8173 34.4408 35.5818 35.1478 35.3232C36.444 35.2655 37.8002 36.6601 39.1841 39.4747H28.2396C28.57 37.7384 29.18 36.6947 30.0579 36.3692V36.3669ZM35.194 22.4394C35.8063 22.1877 36.7097 22.257 37.3404 22.9796C38.0589 23.8016 38.3501 24.7021 38.1028 25.3301C37.8626 25.9374 37.1579 26.1775 36.5364 26.2699C36.3585 25.9974 36.1644 25.7342 35.9565 25.4872C35.5129 24.9584 34.9191 24.4112 34.1636 24.0002C34.1797 23.2775 34.5563 22.7026 35.194 22.4417V22.4394ZM23.3947 28.3525C22.9187 27.8746 22.831 26.9302 23.166 25.8935C23.4617 24.9815 24.2611 24.5613 24.9242 24.5497C25.6127 24.5382 26.1857 24.9192 26.4884 25.5749C25.957 26.2514 25.6289 26.988 25.4279 27.6483C25.3331 27.96 25.2592 28.2763 25.2037 28.5973C24.5961 28.7589 23.8545 28.8143 23.3924 28.3502L23.3947 28.3525ZM25.3863 33.4645C25.1206 32.1738 25.749 31.0355 25.7536 31.024C25.7906 30.9593 25.8045 30.8854 25.7952 30.8116C25.7952 30.7977 25.6242 29.3639 26.0956 27.8284C26.3289 27.0688 26.6709 26.4177 27.1191 25.882C28.503 24.1318 31.7284 23.4668 33.6922 24.5243C34.3207 24.8406 34.8937 25.3047 35.4112 25.9143C36.4486 27.138 36.8598 28.5234 36.8645 28.5349C36.8853 28.6065 36.9291 28.6689 36.9869 28.715C36.9961 28.722 38.022 29.5116 38.2877 30.8116C38.4055 31.3888 38.3939 32.4717 37.107 33.5061C37.4074 32.7488 37.3958 31.9591 37.0493 31.2433C36.3654 29.8256 34.5402 29.0568 32.3915 29.2784C31.9317 29.2484 31.4511 29.3592 31.2732 29.4077C31.0907 29.4331 30.6055 29.5209 30.1943 29.731C28.1334 30.3752 26.7587 31.8021 26.6894 33.3745C26.6547 34.1664 26.9527 34.8914 27.5211 35.4687C27.3178 35.411 27.1283 35.3463 26.9504 35.2678C25.8622 34.7922 25.4972 34.0256 25.3817 33.4691L25.3863 33.4645ZM28.503 36.8009C28.0641 37.4451 27.7406 38.3387 27.5373 39.4724H26.2688C26.6362 38.2071 27.3848 37.3135 28.503 36.8009ZM25.1067 40.1627H45.1011L42.5134 45.4525H22.519L25.1067 40.1627ZM25.2361 46.1429H42.7306C42.8623 46.1429 42.9825 46.0667 43.0402 45.9489L45.309 41.3103V55.5379H25.2361V46.1429ZM52.9011 55.5379H45.9999V41.3103L48.2687 45.9489C48.3265 46.0667 48.4466 46.1429 48.5783 46.1429H52.8988V55.5379H52.9011ZM48.7955 45.4525L46.2078 40.1627H53.0305L55.6181 45.4525H48.7955Z"
                                                        fill="#F15A2D" />
                                                    <path
                                                        d="M38.1721 48.8448C37.1948 48.3738 36.3954 48.8933 35.9218 49.4636C35.1016 48.0228 34.0619 47.8196 33.3711 48.1221C32.5278 48.4915 31.971 49.706 32.5486 51.0221C33.5559 53.3241 35.1755 53.4973 35.2448 53.5042C35.2541 53.5042 35.2656 53.5042 35.2772 53.5042C37.2064 53.5042 38.7267 52.0681 39.0316 50.7381C39.2234 49.9023 38.9022 49.1934 38.1744 48.8448H38.1721ZM38.357 50.5857C38.1121 51.6571 36.8275 52.8046 35.298 52.8162C35.1501 52.7954 33.9787 52.5691 33.1816 50.7473C32.7889 49.8515 33.1077 48.9926 33.6483 48.7547C33.7477 48.7109 33.854 48.6878 33.9626 48.6878C34.5171 48.6878 35.1178 49.2743 35.5637 50.2879C35.6168 50.4102 35.737 50.4888 35.871 50.4934C36.005 50.498 36.1274 50.4241 36.1898 50.304C36.2175 50.2509 36.876 48.9856 37.8741 49.4659C38.424 49.7314 38.4402 50.2209 38.357 50.5857ZM28.7456 28.727C28.7803 28.9141 28.9605 29.0387 29.1476 29.0041C29.3348 28.9695 29.4595 28.7894 29.4249 28.6024C29.4249 28.5977 29.4249 28.5931 29.4226 28.5885L29.2701 27.8496C29.2308 27.6626 29.0483 27.5426 28.8612 27.5818C28.674 27.6211 28.5539 27.8035 28.5931 27.9905L28.7456 28.7293V28.727ZM32.6641 27.9212C32.6988 28.1082 32.879 28.2329 33.0661 28.1983C33.2533 28.1637 33.378 27.9836 33.3434 27.7965C33.3434 27.7919 33.3434 27.7873 33.3411 27.7827L33.1886 27.0438C33.1493 26.8568 32.9668 26.7367 32.7796 26.776C32.5925 26.8152 32.4723 26.9976 32.5116 27.1847L32.6641 27.9235V27.9212Z"
                                                        fill="#F15A2D" />
                                                    <path
                                                        d="M50.6094 32.9844C50.7995 32.9844 50.9536 32.8304 50.9536 32.6404C50.9536 32.4504 50.7995 32.2964 50.6094 32.2964C50.4193 32.2964 50.2651 32.4504 50.2651 32.6404C50.2651 32.8304 50.4193 32.9844 50.6094 32.9844Z"
                                                        fill="#F15A2D" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1_991" x="0" y="0" width="83"
                                                        height="83" filterUnits="userSpaceOnUse"
                                                        color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                            result="hardAlpha" />
                                                        <feOffset dx="2" dy="2" />
                                                        <feGaussianBlur stdDeviation="2" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.17 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                            result="effect1_dropShadow_1_991" />
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                            in2="effect1_dropShadow_1_991" result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </div>
                                        <p class="category-title mb-0 pt-3" style="font-size: 9px">Babies & Toys</p>
                                    </a>
                                </div>
                                <div class="col-3 mb-3">
                                    <a href="#" class="">
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="83" height="83"
                                                viewBox="0 0 83 83" fill="none">
                                                <g filter="url(#filter0_d_1_985)">
                                                    <rect x="2" y="2" width="75" height="75" rx="37.5"
                                                        fill="#F8F8F9" />
                                                    <path
                                                        d="M37.7446 32.8883C37.3229 33.1858 36.9621 33.5621 36.6802 33.9949C36.5403 34.209 36.6012 34.4974 36.8155 34.6372C37.0297 34.7769 37.3184 34.7161 37.4582 34.502C37.677 34.1661 37.9566 33.8754 38.2836 33.6455C38.4911 33.4968 38.5385 33.206 38.3896 32.9987C38.2408 32.7936 37.9544 32.744 37.7469 32.8883H37.7446Z"
                                                        fill="#F15A2D" />
                                                    <path
                                                        d="M39.4787 31.083C39.2667 27.0984 36.1049 23.9229 32.2463 23.9229C28.3876 23.9229 25.0229 27.3035 25.0003 31.4662C25.0003 31.4774 25.0003 31.4865 25.0003 31.4977V52.789H22.0775C21.8205 52.789 21.6152 52.9963 21.6152 53.251C21.6152 53.5056 21.8227 53.7152 22.0775 53.7152H29.3348C29.5919 53.7152 29.7994 53.5079 29.7994 53.251C29.7994 52.994 29.5896 52.789 29.3348 52.789H25.9294V31.5293C25.9294 31.5293 25.9294 31.5135 25.9294 31.509C25.9294 27.8399 28.7642 24.8514 32.244 24.8514C35.7238 24.8514 38.3398 27.6122 38.5473 31.0853C36.4883 31.3309 34.9367 33.0731 34.9345 35.1466V35.87C34.9345 36.1269 35.142 36.3343 35.3991 36.3343H37.4648C37.6701 37.0758 38.3353 37.6257 39.1111 37.6257C39.8869 37.6257 40.5545 37.078 40.7574 36.3343H42.6541C42.9112 36.3343 43.1186 36.1269 43.1186 35.87V35.1466C43.1164 33.0618 41.549 31.3152 39.4787 31.0808V31.083ZM39.1111 36.6994C38.8495 36.6949 38.6082 36.5574 38.4707 36.3365H39.7539C39.6163 36.5574 39.375 36.6949 39.1134 36.6994H39.1111ZM42.1895 35.408H35.8636V35.1466C35.8636 33.3999 37.2799 31.9845 39.0277 31.9845C40.7755 31.9845 42.1917 33.4021 42.1917 35.1466V35.408H42.1895Z"
                                                        fill="#F15A2D" />
                                                    <path
                                                        d="M57.5001 45.6197V42.5501C57.4911 41.4706 56.6093 40.6029 55.5291 40.6119H47.0314C46.5082 40.6096 46.0076 40.8147 45.6377 41.1866C45.5994 41.2249 45.5633 41.2655 45.5295 41.306C45.1529 40.8666 44.6003 40.6119 44.0207 40.6141H35.4758C34.3978 40.6051 33.516 41.4728 33.507 42.5524V45.631C32.3545 45.7347 31.4682 46.6925 31.4592 47.8487V53.2577C31.4592 53.5146 31.6667 53.7197 31.9216 53.7197H35.5231C35.7802 53.7197 35.9877 53.5124 35.9877 53.2577V52.6379L55.1637 52.6447V53.2577C55.1637 53.5146 55.3712 53.7197 55.6283 53.7197H59.2276C59.4847 53.7197 59.6922 53.5124 59.6922 53.2577V47.8487C59.6809 46.6362 58.7112 45.6535 57.5001 45.6242V45.6197ZM35.0585 52.7912H32.3861V47.8464C32.4064 47.1072 33.0198 46.528 33.7573 46.546C34.4677 46.5663 35.0382 47.1365 35.0585 47.8464V52.7912ZM34.4338 45.7324V42.5524C34.4429 41.9844 34.9097 41.5337 35.4758 41.5404H44.0207C44.5891 41.5314 45.0536 41.9844 45.0626 42.5524V48.0267H35.9877V47.851C35.9809 46.8841 35.354 46.0322 34.4338 45.7369V45.7324ZM55.1637 51.7161L35.9877 51.7094V48.9508H45.5295V48.953H55.1637V51.7139V51.7161ZM55.1637 47.8464V48.0267H45.994V42.5952C45.9895 42.3135 46.0978 42.0408 46.2962 41.8402C46.4925 41.6441 46.7563 41.5359 47.0314 41.5382H55.5291C56.0974 41.5292 56.562 41.9822 56.571 42.5479V45.7843C55.7253 46.1201 55.1682 46.9359 55.1637 47.8442V47.8464ZM58.7653 52.7912H56.0929V47.8464C56.1132 47.1072 56.7266 46.528 57.464 46.546C58.1744 46.5663 58.745 47.1365 58.7653 47.8464V52.7912Z"
                                                        fill="#F15A2D" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1_985" x="0" y="0" width="83"
                                                        height="83" filterUnits="userSpaceOnUse"
                                                        color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                            result="hardAlpha" />
                                                        <feOffset dx="2" dy="2" />
                                                        <feGaussianBlur stdDeviation="2" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.17 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                            result="effect1_dropShadow_1_985" />
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                            in2="effect1_dropShadow_1_985" result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </div>
                                        <p class="category-title mb-0 pt-3" style="font-size: 9px">Babies & Toys</p>
                                    </a>
                                </div>
                                <div class="col-3 mb-3">
                                    <a href="#" class="">
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="83" height="83"
                                                viewBox="0 0 83 83" fill="none">
                                                <g filter="url(#filter0_d_1_978)">
                                                    <rect x="2" y="2" width="75" height="75" rx="37.5"
                                                        fill="#F8F8F9" />
                                                    <path
                                                        d="M28.5889 47.9531H27.0826C26.8047 47.9531 26.5798 48.1779 26.5798 48.4555C26.5798 48.7332 26.8047 48.9579 27.0826 48.9579H28.5889C28.8667 48.9579 29.0916 48.7332 29.0916 48.4555C29.0916 48.1779 28.8667 47.9531 28.5889 47.9531ZM30.596 47.9531H30.0933C29.8155 47.9531 29.5906 48.1779 29.5906 48.4555C29.5906 48.7332 29.8155 48.9579 30.0933 48.9579H30.596C30.8739 48.9579 31.0988 48.7332 31.0988 48.4555C31.0988 48.1779 30.8739 47.9531 30.596 47.9531Z"
                                                        fill="#F15A2D" />
                                                    <path
                                                        d="M54.1904 33.4038H53.1868V29.3901C53.1868 28.2833 52.2872 27.3843 51.1797 27.3843H30.095C28.9875 27.3843 28.0879 28.2833 28.0879 29.3901V38.4203H27.0843C25.9768 38.4203 25.0771 39.3194 25.0771 40.4262V48.4534C25.0771 49.5603 25.9768 50.4593 27.0843 50.4593H32.1041C33.2116 50.4593 34.1113 49.5603 34.1113 48.4534V46.9481H38.4885L38.2371 47.951H36.6212C36.3433 47.951 36.1184 48.1758 36.1184 48.4534V49.9588C36.1184 50.2364 36.3433 50.4612 36.6212 50.4612H54.1904C55.298 50.4612 56.1976 49.5621 56.1976 48.4553V35.4115C56.1976 34.3047 55.298 33.4057 54.1904 33.4057V33.4038ZM33.1077 48.4534C33.1077 49.0069 32.6579 49.4564 32.1041 49.4564H27.0824C26.5287 49.4564 26.0788 49.0069 26.0788 48.4534V40.4262C26.0788 39.8728 26.5287 39.4233 27.0824 39.4233H27.725L28.1125 40.5849C28.1805 40.7888 28.3733 40.9286 28.5887 40.9286H30.5959C30.8114 40.9286 31.0041 40.7907 31.0722 40.5849L31.4596 39.4233H32.1022C32.656 39.4233 33.1058 39.8728 33.1058 40.4262V48.4534H33.1077ZM28.7853 39.4233H30.405L30.2368 39.9257H28.9535L28.7853 39.4233ZM34.1132 45.9452V44.4398H43.1492V45.9452H34.1113H34.1132ZM43.1492 46.9481V47.951H43.0395L42.7882 46.9481H43.1492ZM42.0038 47.951H39.2747L39.5261 46.9481H41.7543L42.0057 47.951H42.0038ZM37.1258 49.4564V48.954H43.2134C43.2588 49.1296 43.3287 49.2977 43.4213 49.4564H37.122H37.1258ZM43.1492 35.4096V43.4369H34.1113V40.4262C34.1113 39.3194 33.2116 38.4203 32.1041 38.4203H29.0915V29.3901C29.0915 28.8367 29.5413 28.3872 30.095 28.3872H51.1778C51.7316 28.3872 52.1814 28.8367 52.1814 29.3901V33.4038H45.1544C44.0469 33.4038 43.1473 34.3028 43.1473 35.4096H43.1492ZM55.1959 48.4534C55.1959 49.0069 54.7461 49.4564 54.1923 49.4564H45.1563C44.6025 49.4564 44.1527 49.0069 44.1527 48.4534V35.4115C44.1527 34.8581 44.6025 34.4086 45.1563 34.4086H54.1923C54.7461 34.4086 55.1959 34.8581 55.1959 35.4115V48.4534Z"
                                                        fill="#F15A2D" />
                                                    <path
                                                        d="M54.1903 34.9092H45.1543C44.8765 34.9092 44.6516 35.1339 44.6516 35.4116V46.9501C44.6516 47.2277 44.8765 47.4525 45.1543 47.4525H54.1903C54.4682 47.4525 54.6931 47.2277 54.6931 46.9501V35.4116C54.6931 35.1339 54.4682 34.9092 54.1903 34.9092ZM53.6876 46.4476H45.6552V35.9121H53.6876V46.4476Z"
                                                        fill="#F15A2D" />
                                                    <path
                                                        d="M49.1707 48.9565C49.4484 48.9565 49.6734 48.7315 49.6734 48.4541C49.6734 48.1766 49.4484 47.9517 49.1707 47.9517C48.8931 47.9517 48.668 48.1766 48.668 48.4541C48.668 48.7315 48.8931 48.9565 49.1707 48.9565Z"
                                                        fill="#F15A2D" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1_978" x="0" y="0" width="83"
                                                        height="83" filterUnits="userSpaceOnUse"
                                                        color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                            result="hardAlpha" />
                                                        <feOffset dx="2" dy="2" />
                                                        <feGaussianBlur stdDeviation="2" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.17 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                            result="effect1_dropShadow_1_978" />
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                            in2="effect1_dropShadow_1_978" result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </div>
                                        <p class="category-title mb-0 pt-3" style="font-size: 9px">Babies & Toys</p>
                                    </a>
                                </div>
                                <div class="col-3 mb-3">
                                    <a href="#" class="">
                                        <div class="">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="83" height="83"
                                                viewBox="0 0 83 83" fill="none">
                                                <g filter="url(#filter0_d_1_975)">
                                                    <rect x="2" y="2" width="75" height="75" rx="37.5"
                                                        fill="#F8F8F9" />
                                                    <path
                                                        d="M36.5096 42.4025C35.5093 42.4071 34.5637 41.9312 33.9668 41.122C33.7526 40.8324 33.805 40.4186 34.0898 40.2025C34.3746 39.9864 34.787 40.0392 35.0012 40.3266C35.3658 40.8117 35.9126 41.0875 36.5096 41.0875C37.1065 41.0875 37.6556 40.8117 38.0179 40.3266C38.2321 40.0369 38.6422 39.9795 38.9293 40.2025C39.2164 40.4186 39.2733 40.8324 39.0523 41.122C38.4508 41.9289 37.5098 42.4048 36.5096 42.4025ZM45.8262 40.3289C45.4617 40.814 44.9148 41.0898 44.3179 41.0898C43.7209 41.0898 43.1718 40.814 42.8095 40.3289C42.5954 40.0415 42.1921 39.9818 41.905 40.1979C41.9027 40.1979 41.9004 40.2025 41.8981 40.2025C41.6111 40.4186 41.5541 40.8324 41.7751 41.122C42.3857 41.9358 43.3176 42.4025 44.3179 42.4025C45.3181 42.4025 46.2569 41.9358 46.8607 41.122C47.0748 40.8324 47.0224 40.4186 46.7376 40.2025C46.4528 39.9864 46.0404 40.0392 45.8262 40.3266V40.3289ZM41.8571 47.1084C41.5313 47.4096 40.9913 47.5866 40.4194 47.5866C39.8475 47.5866 39.3075 47.4096 38.9817 47.1084C38.7151 46.8647 38.305 46.8854 38.0635 47.1544C37.822 47.4233 37.8425 47.8372 38.109 48.0808C38.6741 48.6004 39.5217 48.8946 40.4194 48.8946C41.3171 48.8946 42.1624 48.6004 42.7298 48.0808C42.9964 47.8372 43.0169 47.4233 42.7754 47.1544C42.5338 46.8854 42.1237 46.8647 41.8571 47.1084ZM57.3849 52.1223C57.3849 52.3913 57.2163 52.635 56.9611 52.7269C54.9059 53.5017 53.9877 55.7408 53.974 55.7592C53.8738 56.0075 53.6346 56.1684 53.368 56.1661C53.1014 56.1661 52.8667 56.0029 52.7619 55.7592C51.8642 53.5086 49.8022 52.7407 49.7817 52.7338C49.5356 52.6419 49.3579 52.4051 49.3533 52.143C49.3396 51.874 49.4968 51.6235 49.7361 51.52C52.0852 50.4694 52.7232 48.5935 52.7482 48.513C52.8348 48.2464 53.0809 48.0624 53.3589 48.0601C53.6186 48.0349 53.8852 48.2303 53.9763 48.4923C54.7054 50.5591 56.9429 51.4924 56.9634 51.4993C57.2095 51.5982 57.3735 51.8465 57.3735 52.1154L57.3804 52.1223H57.3849ZM55.3548 52.097C54.7305 51.6763 53.9558 51.0395 53.3703 50.1476C52.967 50.7522 52.3358 51.4855 51.3857 52.1108C52.01 52.5246 52.7778 53.1752 53.3885 54.127C53.8054 53.4902 54.448 52.7017 55.3525 52.0993L55.3548 52.097ZM46.5257 52.5246V56.7248C46.5257 57.0857 46.2341 57.3822 45.8741 57.3822C45.5141 57.3822 45.2224 57.088 45.2224 56.7248V53.2856C43.7255 54.0327 42.0781 54.4235 40.408 54.4281H40.2052C38.4622 54.3959 36.7898 53.9155 35.2997 53.0902V56.7271C35.2997 57.088 35.008 57.3845 34.648 57.3845C34.2881 57.3845 33.9964 57.0903 33.9964 56.7271V52.2442C32.4334 51.0533 31.2007 49.474 30.4192 47.6624C29.1569 48.9153 28.5782 50.3407 28.5714 50.3614C28.4392 50.6993 28.061 50.8648 27.7283 50.7315C27.562 50.6648 27.4276 50.5315 27.3615 50.3614C26.1197 47.244 23.2238 46.1543 23.1987 46.1474C22.8592 46.021 22.6861 45.6417 22.8091 45.2991C22.8684 45.1336 22.9937 44.998 23.1532 44.9267C24.9805 44.106 26.0605 42.9313 26.6666 42.0255C26.2701 40.7197 26.1197 39.7289 26.1129 39.6829C24.9213 33.3218 29.0863 28.7998 29.2617 28.609C29.9385 27.7699 30.72 27.0596 31.5448 26.4549C32.267 22.3583 35.8374 19.3076 39.982 19.3076H40.8273C44.9832 19.3076 48.5627 22.3721 49.2713 26.4825C50.1029 27.094 50.8981 27.7952 51.5817 28.6412C51.7252 28.7929 55.888 33.3149 54.6986 39.7013C54.6667 39.9059 53.8259 45.3658 50.7227 47.7153C50.6315 47.7866 50.5267 47.8211 50.4174 47.8326C49.572 49.7613 48.205 51.3775 46.5143 52.52L46.5212 52.5269L46.5257 52.5246ZM45.1586 25.7239C45.2953 26.0181 45.3933 26.3078 45.4457 26.5515C45.8878 29.5769 44.229 30.9884 43.4999 31.4551C43.2721 31.5999 43.0123 31.7034 42.7389 31.7907C50.488 34.7839 50.5586 39.8783 50.5381 40.4875L50.8958 45.752C52.8211 43.4094 53.4204 39.5358 53.4204 39.4898C54.4935 33.754 50.6498 29.5585 50.611 29.5194C49.1027 27.655 47.0452 26.4802 45.1518 25.7331L45.1586 25.7262V25.7239ZM33.1693 25.4296C36.6964 23.4939 40.4103 23.1652 40.6313 23.1514C41.7956 23.0732 42.7138 23.3422 43.4224 23.7675C44.6916 24.1078 46.1931 24.648 47.665 25.4549C46.6305 22.6204 43.9237 20.6295 40.8341 20.6295H39.9888C36.9106 20.6295 34.2129 22.6112 33.1716 25.4342V25.4273L33.1693 25.4296ZM27.398 39.4622C27.398 39.4622 27.4572 39.8438 27.5871 40.3933C27.6919 40.3151 27.8218 40.2691 27.9585 40.2691C28.2319 40.2622 28.4848 40.4392 28.5828 40.7013C28.9268 41.6738 29.501 42.4531 30.1116 43.0784L30.2871 40.4783C30.262 39.7703 30.3463 33.108 42.1784 30.5792C42.4131 30.5263 42.6204 30.4482 42.8027 30.3309C43.5888 29.832 44.4614 28.809 44.1629 26.7791C44.1493 26.7262 43.5523 24.2595 40.7225 24.448C40.6632 24.448 33.7936 25.0641 30.2415 29.4688C30.1709 29.547 26.3316 33.7425 27.398 39.453V39.4599V39.4622ZM31.0595 45.4946C30.123 44.9175 28.8402 43.9198 27.9562 42.4301C27.4093 43.329 26.441 44.5382 24.8461 45.5083C25.7688 46.0739 27.0448 47.0647 27.9812 48.6648C28.56 47.713 29.5557 46.4003 31.0595 45.4877V45.4946ZM49.6267 46.2693L49.2371 40.5335V40.4415C49.2508 40.2254 49.4125 35 40.408 32.3815C31.4172 34.9931 31.5858 40.2117 31.5926 40.4484V40.5335L31.3465 44.1106C32.1144 44.6417 32.7319 44.8991 32.7455 44.9037C33.0805 45.0394 33.2422 45.4233 33.1078 45.7612C33.0395 45.9313 32.905 46.0647 32.7341 46.1314C32.2716 46.3084 31.8569 46.5383 31.4787 46.7934C32.9369 50.5223 36.3911 53.0488 40.2349 53.1201H40.4103C44.6186 53.1201 48.3736 50.3315 49.629 46.2739V46.267L49.6267 46.2693Z"
                                                        fill="#F15A2D" />
                                                </g>
                                                <defs>
                                                    <filter id="filter0_d_1_975" x="0" y="0" width="83"
                                                        height="83" filterUnits="userSpaceOnUse"
                                                        color-interpolation-filters="sRGB">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                                        <feColorMatrix in="SourceAlpha" type="matrix"
                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                                            result="hardAlpha" />
                                                        <feOffset dx="2" dy="2" />
                                                        <feGaussianBlur stdDeviation="2" />
                                                        <feComposite in2="hardAlpha" operator="out" />
                                                        <feColorMatrix type="matrix"
                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.17 0" />
                                                        <feBlend mode="normal" in2="BackgroundImageFix"
                                                            result="effect1_dropShadow_1_975" />
                                                        <feBlend mode="normal" in="SourceGraphic"
                                                            in2="effect1_dropShadow_1_975" result="shape" />
                                                    </filter>
                                                </defs>
                                            </svg>
                                        </div>
                                        <p class="category-title mb-0 pt-3" style="font-size: 9px">Babies & Toys</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        {{-- <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mt-5">
                        <div class="custom-slider pb-5 pt-3">
                            <div>
                                <a href="/">
                                    <img class="img-fluid fixed-size rounded-2"
                                        src="http://discountzshop.com/storage/banner/image_one/NYvnUTNIS51731239526.jpg"
                                        alt="" />
                                </a>
                            </div>
                            <div>
                                <a href="/">
                                    <img class="img-fluid fixed-size rounded-2"
                                        src="http://discountzshop.com/storage/banner/image_one/NYvnUTNIS51731239526.jpg"
                                        alt="" />
                                </a>
                            </div>
                            <div>
                                <a href="/">
                                    <img class="img-fluid fixed-size rounded-2"
                                        src="http://discountzshop.com/storage/banner/image_one/NYvnUTNIS51731239526.jpg"
                                        alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

        <!-- Modal trigger button -->
        <div class="modal fade" id="user-search" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false"
            role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                <div class="modal-content">
                    <div class="modal-header py-4" style="background-color: #f15a2d">
                        <h5 class="modal-title text-white" id="modalTitleId">
                            Search Your Need.
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb-3">
                                        <label for="exampleInputSearch" class="form-label">Search Offers and
                                            Discounts</label>
                                        <input type="text" class="form-control" id="exampleInputSearch"
                                            aria-describedby="searchHelp"
                                            placeholder="Search for offers and discounts">
                                        <div id="searchHelp" class="form-text">Find the best deals and offers
                                            available now.</div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="pt-4">
                                        <button type="submit" class="search-offers-mobile">
                                            <small>Search</small>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Optional: Place to the bottom of scripts -->
        <script>
            const myModal = new bootstrap.Modal(
                document.getElementById("modalId"),
                options,
            );
        </script>

    </div>

    @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                $('.custom-slider').slick({
                    dots: true,
                    arrows: false,
                    slidesToShow: 1,
                    adaptiveHeight: true,
                    infinite: true,
                    speed: 300,
                    autoplay: false,
                    autoplaySpeed: 3000,
                    pauseOnHover: true,
                    pauseOnDotsHover: true
                });
            });
        </script>
    @endpush
</x-app-layout>
