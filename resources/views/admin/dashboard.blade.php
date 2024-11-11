<x-admin-app-layout :title="'Admin Dashboard || DiscountZ Shop'">



    {{-- For Company Item  --}}
    <div class="row g-5 g-xl-8">

        <div class="col-xl-3">

            <!--begin::Statistics Widget 5-->
            <a href="#" class="card bg-info hoverable card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <i class="ki-duotone ki-chart-simple text-primary fs-2x ms-n1"><span class="path1"></span><span
                            class="path2"></span><span class="path3"></span><span class="path4"></span></i>

                    <div class="text-white fw-bold mb-2 mt-5" style="font-size: 20px">
                        {{ $brandCount }}
                    </div>

                    <div class="fw-semibold text-white" style="font-size: 25px">
                        Total Brand </div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>

        <div class="col-xl-3">

            <!--begin::Statistics Widget 5-->
            <a href="#" class="card bg-dark hoverable card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <i class="ki-duotone ki-cheque text-gray-100 fs-2x ms-n1"><span class="path1"></span><span
                            class="path2"></span><span class="path3"></span><span class="path4"></span><span
                            class="path5"></span><span class="path6"></span><span class="path7"></span></i>

                    <div class="text-white fw-bold mb-2 mt-5" style="font-size: 20px">
                        {{ $offerCount }}
                    </div>

                    <div class="fw-semibold text-white" style="font-size: 25px">
                        Total Offer </div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>

        <div class="col-xl-3">

            <!--begin::Statistics Widget 5-->
            <a href="#" class="card bg-warning hoverable card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body">
                    <i class="ki-duotone ki-briefcase text-white fs-2x ms-n1"><span class="path1"></span><span
                            class="path2"></span></i>

                    <div class="text-white fw-bold mb-2 mt-5" style="font-size: 20px">
                        {{ $storeCount }}
                    </div>

                    <div class="fw-semibold text-white" style="font-size: 25px">
                        Total Store </div>
                </div>
                <!--end::Body-->
            </a>
            <!--end::Statistics Widget 5-->
        </div>

        {{-- <div class="col-xl-3">

                    <!--begin::Statistics Widget 5-->
                    <a href="#" class="card bg-info hoverable card-xl-stretch mb-5 mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <i class="ki-duotone ki-chart-pie-simple text-white fs-2x ms-n1"><span
                                    class="path1"></span><span class="path2"></span></i>

                            <div class="text-white fw-bold fs-2 mb-2 mt-5">
                                $50,000
                            </div>

                            <div class="fw-semibold text-white">
                                Milestone Reached </div>
                        </div>
                        <!--end::Body-->
                    </a>
                    <!--end::Statistics Widget 5-->
                </div> --}}

    </div>
    {{-- For Company Item  --}}


    <!--begin::Row-->
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
            <!--begin::Col-->
            <div class="col-md-6 col-xxl-4">
                <!--begin::Card-->
                <div class="card">
                    <!--begin::Card body-->
                    <div class="card-body d-flex flex-center flex-column p-9">
                        <!--begin::Avatar-->
                        <div class="symbol symbol-65px symbol-circle mb-5">
                            <img src="{{ !empty(Auth::guard('admin')->user()->profile_image) && file_exists(public_path('storage/user/profile_image/' . Auth::guard('admin')->user()->profile_image)) ? asset('storage/user/profile_image/' . Auth::guard('admin')->user()->profile_image) : asset('https://ui-avatars.com/api/?name=' . urlencode(Auth::guard('admin')->user()->name)) }}"
                                alt="image">
                            <div
                                class="bg-success position-absolute border border-4 border-white h-15px w-15px rounded-circle translate-middle start-100 top-100 ms-n3 mt-n3">
                            </div>
                        </div>
                        <!--end::Avatar-->
                        <!--begin::Name-->
                        <a href="javascript:;"
                            class="fs-4 text-gray-800 text-hover-primary fw-bolder mb-0">{{ $admin->name }}</a>
                        <!--end::Name-->
                        <!--begin::Position-->
                        <div class="fw-bold text-gray-400 mb-6">{{ $admin->email }}</div>
                        <!--end::Position-->
                        <!--begin::Info-->
                        <div class="d-flex flex-center flex-wrap">
                            <!--begin::Stats-->
                            <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                <div class="fs-6 fw-bolder text-gray-700">{{ $todayAdded }}</div>
                                <div class="fw-bold text-gray-400">Today Added</div>
                            </div>
                            <!--end::Stats-->
                            <!--begin::Stats-->
                            <div class="border border-gray-300 border-dashed rounded min-w-80px py-3 px-4 mx-2 mb-3">
                                <div class="fs-6 fw-bolder text-gray-700">{{ $totalAdded }}</div>
                                <div class="fw-bold text-gray-400">Total Added</div>
                            </div>
                            <!--end::Stats-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Col-->
        @endforeach

    </div>
    <!--end::Row-->




</x-admin-app-layout>
