<x-admin-app-layout :title="'Admin Dashboard || DiscountZ Shop'">


    <div class="row g-5 g-xl-8">

        <div class="col-12 mb-5">

            <div class="card">
                <div class="card-body">
                    <!--begin::Row-->
                    <div class="row">

                        <!--begin::Col-->
                        <div class="col-lg-3">
                            <div class="bg-light-dark p-8 rounded-2 d-flex align-items-center justify-content-between">
                                <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                                <span class="svg-icon svg-icon-3x svg-icon-warning my-2">
                                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                        viewBox="0 0 32 32" style="enable-background:new 0 0 32 32"
                                        xml:space="preserve">
                                        <style>
                                            .st1 {
                                                fill: #333
                                            }
                                        </style>
                                        <path class="st1"
                                            d="M25.838 31H6.162a3.957 3.957 0 0 1-3.245-1.661 3.956 3.956 0 0 1-.549-3.604l.704-2.113a6.034 6.034 0 0 1 4.966-4.059C10.131 19.307 13.211 19 16 19c2.788 0 5.869.307 7.963.563a6.032 6.032 0 0 1 4.965 4.059l.704 2.113a3.954 3.954 0 0 1-.55 3.604A3.955 3.955 0 0 1 25.838 31zM16 21c-2.688 0-5.681.298-7.718.549a4.02 4.02 0 0 0-3.312 2.706l-.704 2.112c-.206.618-.106 1.274.274 1.802S5.511 29 6.162 29h19.676a1.98 1.98 0 0 0 1.622-.83c.381-.528.48-1.185.275-1.803l-.704-2.112a4.02 4.02 0 0 0-3.312-2.706C21.681 21.298 18.687 21 16 21zM16 18c-4.687 0-8.5-3.813-8.5-8.5S11.313 1 16 1c4.687 0 8.5 3.813 8.5 8.5S20.687 18 16 18zm0-15c-3.584 0-6.5 2.916-6.5 6.5S12.416 16 16 16s6.5-2.916 6.5-6.5S19.584 3 16 3z" />
                                        <path
                                            d="M12.04 10.54c-.543 0-.988-.435-1-.98a4.964 4.964 0 0 1 1.394-3.564 4.968 4.968 0 0 1 3.505-1.535c.562.01 1.009.428 1.02.98a1 1 0 0 1-.98 1.02 2.982 2.982 0 0 0-2.103.92 2.981 2.981 0 0 0-.836 2.139 1 1 0 0 1-.98 1.02h-.02z"
                                            style="fill:#008ad0" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <a href="{{ route('admin.brands.index') }}" class="text-dark fw-bold fs-3">Total
                                    Brand</a>
                                <span class="float-end fw-bolder fs-2 badge bg-success">{{ $brandCount }}</span>
                            </div>

                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-3">
                            <div
                                class="bg-light-primary p-8 rounded-2 d-flex align-items-center justify-content-between">
                                <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                <span class="svg-icon svg-icon-3x svg-icon-primary my-2">
                                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 122.88 114.58">
                                        <title>product</title>
                                        <path
                                            d="M118.13,9.54a3.25,3.25,0,0,1,2.2.41,3.28,3.28,0,0,1,2,3l.57,78.83a3.29,3.29,0,0,1-1.59,3L89.12,113.93a3.29,3.29,0,0,1-2,.65,3.07,3.07,0,0,1-.53,0L3.11,105.25A3.28,3.28,0,0,1,0,102V21.78H0A3.28,3.28,0,0,1,2,18.7L43.89.27h0A3.19,3.19,0,0,1,45.63,0l72.5,9.51Zm-37.26,1.7-24.67,14,30.38,3.88,22.5-14.18-28.21-3.7Zm-29,20L50.75,64.62,38.23,56.09,25.72,63.17l2.53-34.91L6.55,25.49V99.05l77.33,8.6V35.36l-32-4.09Zm-19.7-9.09L56.12,8,45.7,6.62,15.24,20l16.95,2.17ZM90.44,34.41v71.12l25.9-15.44-.52-71.68-25.38,16Z" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <a href="{{ route('admin.offer.index') }}" class="text-primary fw-bold fs-3">Total
                                    Offer</a>
                                <span class="float-end fw-bolder fs-2 badge bg-primary">{{ $offerCount }}</span>
                            </div>

                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-3">
                            <div
                                class="bg-light-info p-8 rounded-2 d-flex align-items-center justify-content-between">
                                <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                <span class="svg-icon svg-icon-3x svg-icon-info my-2">
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
                                <!--end::Svg Icon-->
                                <a href="{{ route('admin.store.index') }}" class="text-info fw-bold fs-3 mt-2">Total
                                    Store</a>
                                <span
                                    class="float-end fw-bolder text-white fs-2 badge bg-info">{{ $storeCount }}</span>
                            </div>

                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-lg-3">
                            <div
                                class="bg-light-danger p-8 rounded-2 d-flex align-items-center justify-content-between">
                                <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                <span class="svg-icon svg-icon-3x svg-icon-danger my-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        version="1.1" width="256" height="256" viewBox="0 0 256 256"
                                        xml:space="preserve">
                                        <g style="stroke: none; stroke-width: 0; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: none; fill-rule: nonzero; opacity: 1;"
                                            transform="translate(1.4065934065934016 1.4065934065934016) scale(2.81 2.81)">
                                            <path
                                                d="M 49.886 27.623 c -1.572 -0.36 -3.206 -0.556 -4.886 -0.556 c -12.049 0 -21.816 9.767 -21.816 21.816 v 24.825 h 9.773 V 48.883 C 32.956 38.515 40.191 29.842 49.886 27.623 z"
                                                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(219,46,46); fill-rule: nonzero; opacity: 1;"
                                                transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path d="M 49.886 27.623"
                                                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(241,51,51); fill-rule: nonzero; opacity: 1;"
                                                transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path
                                                d="M 49.886 27.623 c -9.695 2.22 -19.862 10.892 -19.862 21.26 l -6.841 24.825 c 13.888 2.685 28.518 2.333 43.633 0 V 48.883 C 66.816 38.515 59.581 29.842 49.886 27.623 z"
                                                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(241,51,51); fill-rule: nonzero; opacity: 1;"
                                                transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path
                                                d="M 49.886 27.623 c -1.572 -0.36 -3.206 -0.556 -4.886 -0.556 c -12.049 0 -21.816 9.767 -21.816 21.816 v 24.825 h 9.773 V 48.883 C 32.956 38.515 40.191 29.842 49.886 27.623 z"
                                                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(219,46,46); fill-rule: nonzero; opacity: 1;"
                                                transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path
                                                d="M 74.768 73.708 H 30.932 v 12.102 h 47.168 v -8.769 C 78.101 75.2 76.608 73.708 74.768 73.708 z"
                                                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(75,95,123); fill-rule: nonzero; opacity: 1;"
                                                transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path
                                                d="M 32.887 78.651 v -4.943 H 15.232 c -1.841 0 -3.333 1.492 -3.333 3.333 v 7.29 c 0 1.841 1.492 3.333 3.333 3.333 h 59.536 c 1.841 0 3.333 -1.492 3.333 -3.333 v -0.475 H 38.092 C 35.217 83.856 32.887 81.526 32.887 78.651 z"
                                                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(55,70,91); fill-rule: nonzero; opacity: 1;"
                                                transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path
                                                d="M 14.389 47.336 H 2 c -1.104 0 -2 -0.895 -2 -2 c 0 -1.104 0.896 -2 2 -2 h 12.389 c 1.104 0 2 0.896 2 2 C 16.389 46.441 15.494 47.336 14.389 47.336 z"
                                                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(241,51,51); fill-rule: nonzero; opacity: 1;"
                                                transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path
                                                d="M 88 47.336 H 75.61 c -1.104 0 -2 -0.895 -2 -2 c 0 -1.104 0.896 -2 2 -2 H 88 c 1.104 0 2 0.896 2 2 C 90 46.441 89.104 47.336 88 47.336 z"
                                                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(241,51,51); fill-rule: nonzero; opacity: 1;"
                                                transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path
                                                d="M 45 16.726 c -1.104 0 -2 -0.896 -2 -2 V 2.336 c 0 -1.104 0.896 -2 2 -2 s 2 0.896 2 2 v 12.39 C 47 15.831 46.104 16.726 45 16.726 z"
                                                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(241,51,51); fill-rule: nonzero; opacity: 1;"
                                                transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path
                                                d="M 23.355 25.691 c -0.512 0 -1.024 -0.195 -1.414 -0.586 l -8.761 -8.761 c -0.781 -0.781 -0.781 -2.047 0 -2.828 c 0.78 -0.781 2.048 -0.781 2.828 0 l 8.761 8.761 c 0.781 0.781 0.781 2.047 0 2.828 C 24.379 25.496 23.867 25.691 23.355 25.691 z"
                                                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(241,51,51); fill-rule: nonzero; opacity: 1;"
                                                transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                            <path
                                                d="M 66.645 25.691 c -0.512 0 -1.023 -0.195 -1.414 -0.586 c -0.781 -0.781 -0.781 -2.047 0 -2.828 l 8.761 -8.761 c 0.781 -0.781 2.047 -0.781 2.828 0 c 0.781 0.781 0.781 2.047 0 2.828 l -8.761 8.761 C 67.668 25.496 67.156 25.691 66.645 25.691 z"
                                                style="stroke: none; stroke-width: 1; stroke-dasharray: none; stroke-linecap: butt; stroke-linejoin: miter; stroke-miterlimit: 10; fill: rgb(241,51,51); fill-rule: nonzero; opacity: 1;"
                                                transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <a href="{{ route('admin.expired.offers') }}" class="text-danger fw-bold fs-3 mt-2">Expired Offers</a>
                                <span class="float-end fw-bolder fs-2 badge bg-danger">{{ $expiredoffers }}</span>
                            </div>

                        </div>
                        <!--end::Col-->

                    </div>
                    <!--end::Row-->
                </div>
            </div>


        </div>

    </div>


    <div class="row g-6 g-xl-9">

        @foreach ($admins as $admin)
            @php
                $brandCountByAdmins = App\Models\Brand::where('added_by', $admin->id)->count();
                $offerCountByAdmins = App\Models\Offer::where('added_by', $admin->id)->count();
                $storeCountByAdmins = App\Models\Store::where('added_by', $admin->id)->count();

                $totalAdded = $brandCountByAdmins + $offerCountByAdmins + $storeCountByAdmins;

                $today = \Carbon\Carbon::today();

                $offerCountByAdminsToday = App\Models\Offer::where('status', 'active')
                    ->where('added_by', $admin->id)
                    ->whereDate('created_at', $today)
                    ->count();

                $brandCountByAdminsToday = App\Models\Brand::where('status', 'active')
                    ->where('added_by', $admin->id)
                    ->whereDate('created_at', $today)
                    ->count();

                $storeCountByAdminsToday = App\Models\Store::where('status', 'active')
                    ->where('added_by', $admin->id)
                    ->whereDate('created_at', $today)
                    ->count();

                $todayAdded = $offerCountByAdminsToday + $brandCountByAdminsToday + $storeCountByAdminsToday;
            @endphp

            <div class="col-md-6 col-xxl-3">

                <div class="card">

                    <div class="card-body d-flex flex-center flex-column p-9">

                        <div class="symbol symbol-65px symbol-circle mb-5">
                            <img src="{{ !empty($admin->profile_image) && file_exists(public_path('storage/user/profile_image/' . $admin->profile_image)) ? asset('storage/user/profile_image/' . $admin->profile_image) : asset('https://ui-avatars.com/api/?name=' . urlencode($admin->name)) }}"
                                alt="image">
                            <div
                                class="bg-success position-absolute border border-4 border-white h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3">
                            </div>
                        </div>


                        <a href="javascript:;"
                            class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">{{ $admin->name }}</a>


                        <div class="fw-bold text-gray-400 mb-6">{{ $admin->email }}</div>


                        <div class="d-flex flex-center flex-wrap">

                            <div
                                class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3 text-center">
                                <div class="fs-2 fw-bolder text-gray-700">{{ $todayAdded }}</div>
                                <div class="fw-bold text-gray-400">Today Added</div>
                            </div>


                            <div
                                class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3 text-center">
                                <div class="fs-2 fw-bolder text-gray-700">{{ $totalAdded }}</div>
                                <div class="fw-bold text-gray-400">Total Added</div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        @endforeach

    </div>


</x-admin-app-layout>
