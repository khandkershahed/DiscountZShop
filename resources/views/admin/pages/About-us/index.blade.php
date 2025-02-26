<x-admin-app-layout :title="'About Us Update'">

    {{-- Font Awesome CDN --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />


    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title"></div>
            <div class="card-toolbar">

                @if (Auth::guard('admin')->user()->can('add.about'))
                    <a href="{{ route('admin.about-us.create') }}" class="btn btn-light-primary">
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
                        Add About
                    </a>
                @endif

            </div>
        </div>

        <div class="card-body pt-0">
            <table id="kt_datatable_example_5" class="table table-striped table-row-bordered gy-5 gs-7 border rounded">
                <thead class="bg-dark text-light">
                    <tr>
                        <th width="5%">No</th>
                        <th>Template</th>
                        {{-- <th>Banner Image</th> --}}
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-bold text-gray-600">

                    @foreach ($aboutus as $key => $about)
                        <tr>
                            <td>{{ $key + 1 }}</td>

                            <td class="">
                                {{-- <img src="{{ !empty($about->banner_image) ? url('storage/' . $about->banner_image) : 'https://ui-avatars.com/api/?name=' . urlencode($about->banner_image) }}"
                                    height="40" width="40" alt=""> --}}
                                <p>About One</p>

                            </td>

                            {{-- <td class="text-start">{{ $about->categoryName->name }}</td> --}}
                            {{-- <td class="">{{ $about->row_one_column_one_title }}</td> --}}

                            {{-- <td class="text-start">
                                <label class="switch">
                                    <input type="checkbox" class="status-toggle" data-id="{{ $about->id }}"
                                        {{ $about->status == 'active' ? 'checked' : '' }}>
                                    <span class="slider round"></span>
                                </label>
                            </td> --}}


                            <td>
                                @if (Auth::guard('admin')->user()->can('edit.about'))
                                    <a href="{{ route('admin.about-us.edit', $about->id) }}" class="text-primary">
                                        <i class="fa-solid fa-pencil text-primary"></i>
                                    </a>
                                @endif

                                @if (Auth::guard('admin')->user()->can('delete.about'))
                                    <a href="{{ route('admin.about-us.destroy', $about->id) }}" class="delete">
                                        <i class="fa-solid fa-trash text-danger"></i>
                                    </a>
                                @endif

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
                    "lengthMenu": "Show _MENU_",
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
