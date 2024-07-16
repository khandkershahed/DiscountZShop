<x-admin-app-layout :title="'Employees List'">

    <div class="card">

        <div class="card-header border-0 pt-6">

            <div class="card-title">

                <div class="d-flex align-items-center position-relative my-1">

                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                                transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                            <path
                                d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                                fill="currentColor" />
                        </svg>
                    </span>

                    <input type="text" data-kt-employee-table-filter="search"
                        class="form-control form-control-solid w-250px ps-14" placeholder="Search employee" />
                </div>

            </div>


            <div class="card-toolbar">

                <div class="d-flex justify-content-end" data-kt-employee-table-toolbar="base">


                    <a href="{{ route('admin.employee.create') }}" class="btn btn-primary rounded-1">

                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect opacity="0.5" x="11.364" y="20.364" width="16" height="2" rx="1"
                                    transform="rotate(-90 11.364 20.364)" fill="currentColor" />
                                <rect x="4.36396" y="11.364" width="16" height="2" rx="1"
                                    fill="currentColor" />
                            </svg>
                        </span>
                        Add Employee
                    </a>

                </div>


                <div class="d-flex justify-content-end align-items-center d-none" data-kt-employee-table-toolbar="selected">
                    <div class="fw-bolder me-5">
                        <span class="me-2" data-kt-employee-table-select="selected_count"></span>Selected
                    </div>
                    <button type="button" class="btn btn-danger" data-kt-employee-table-select="delete_selected">Delete
                        Selected</button>
                </div>


            </div>

        </div>


        <div class="card-body py-4">

            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_employees">

                <thead>

                    <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                    data-kt-check-target="#kt_table_employees .form-check-input" value="1" />
                            </div>
                        </th>
                        <th class="min-w-125px">employee</th>
                        <th class="min-w-125px">Role</th>
                        {{-- <th class="min-w-125px">Last login</th>
                        <th class="min-w-125px">Two-step</th>
                        <th class="min-w-125px">Joined Date</th> --}}
                        <th class="text-end min-w-100px">Actions</th>
                    </tr>

                </thead>


                <tbody class="text-gray-600 fw-bold">

                    @foreach ($employees as $employee)
                        <tr>

                            <td>
                                <div class="form-check form-check-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </div>
                            </td>


                            <td class="d-flex align-items-center">

                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="javascript:void(0)">
                                        <div class="symbol-label">
                                            <img src="assets/media/avatars/300-6.jpg" alt="{{ $employee->name }}"
                                                class="w-100" />
                                        </div>
                                    </a>
                                </div>


                                <div class="d-flex flex-column">
                                    <a href="javascript:void(0)"
                                        class="text-gray-800 text-hover-primary mb-1">{{ $employee->name }}</a>
                                    <span>{{ $employee->email }}</span>
                                </div>

                            </td>

                            <td>
                                @forelse ($employee->getRoleNames() as $role)
                                    <div class="badge badge-light-success fw-bolder">{{ $role }}</div>

                                @empty
                                    <div class="badge badge-light-danger fw-bolder">No Role</div>
                                @endforelse
                            </td>

                            <td class="text-end">
                                <a href="#" class="btn btn-light btn-active-light-primary btn-sm"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions

                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z"
                                                fill="currentColor" />
                                        </svg>
                                    </span>


                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4"
                                    data-kt-menu="true">

                                    <div class="menu-item px-3">
                                        <a href="{{ route('admin.employee.show', $employee->id) }}" class="menu-link px-3">Show
                                            Details</a>
                                    </div>
                                    <div class="menu-item px-3">
                                        <a href="{{ route('admin.employee.edit', $employee->id) }}"
                                            class="menu-link px-3">Edit</a>
                                    </div>


                                    <div class="menu-item px-3">
                                        <a href="{{ route('admin.employee.destroy', $employee->id) }}"
                                            class="menu-link px-3 delete">Delete</a>
                                    </div>

                                </div>

                            </td>

                        </tr>
                    @endforeach


                </tbody>

            </table>

        </div>

    </div>

</x-admin-app-layout>
