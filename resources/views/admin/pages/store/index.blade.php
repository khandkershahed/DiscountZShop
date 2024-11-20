<x-admin-app-layout :title="'Store List'">
    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title">
            </div>
            <div class="card-toolbar">

                <a href="{{ route('admin.store.create') }}" class="btn btn-light-primary">
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
                    Add Store
                </a>
            </div>
        </div>
        <div class="card-body pt-0">

            <table id="kt_datatable_example_5" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">

                <thead class="bg-dark text-light">
                    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th>Sl</th>
                        <th>Store Name</th>
                        <th>Category Name</th>
                        <th>Added By</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody class="fw-bold text-gray-600">
                    @foreach ($stores as $store)
                        <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $store->name }}</td>
                            <td>{{ optional($store->categoryName)->name }}</td>

                            <td>{{ optional($store->added)->name }}</td>

                            <td> <span class="badge {{ $store->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                                    {{ $store->status == 'active' ? 'Active' : 'InActive' }}</span>
                            </td>

                            <td>
                                <a href="{{ route('admin.store.edit', $store->id) }}"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <a href="{{ route('admin.store.destroy', $store->id) }}"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete">
                                    <i class="fa-solid fa-trash-can-arrow-up"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>

    @push('scripts')
        <script>
            $("#kt_datatable_example_5").DataTable({
                "language": {
                    "lengthMenu": "Show MENU",
                },
                "dom": "<'row'" +
                    "<'col-sm-6 d-flex align-items-center justify-conten-start'l>" +
                    "<'col-sm-6 d-flex align-items-center justify-content-end'f>" +
                    ">" +

                    "<'table-responsive'tr>" +

                    "<'row'" +
                    "<'col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start'i>" +
                    "<'col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end'p>" +
                    ">"
            });
        </script>
    @endpush

</x-admin-app-layout>
