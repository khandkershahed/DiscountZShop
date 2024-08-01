<x-admin-app-layout :title="'Offer List'">
    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title">
            </div>
            <div class="card-toolbar">

                <a href="{{ route('admin.offer.create') }}" class="btn btn-light-primary">
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
                    Add Offer
                </a>
            </div>
        </div>
        <div class="card-body pt-0">

            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">

                <thead>
                    <tr class="text-center text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th>Sl</th>
                        <th>Offer Name</th>
                        <th>Brand Name</th>
                        <th>Store Name</th>
                        <th>Expire Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody class="fw-bold text-gray-600">
                    @foreach ($offers as $offer)
                        <tr class="text-center text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $offer->name }}</td>
                            <td>Status</td>
                            <td>Action</td>
                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>

</x-admin-app-layout>
