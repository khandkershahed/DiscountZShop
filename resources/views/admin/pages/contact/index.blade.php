<x-admin-app-layout :title="'Contact Message List'">
    <div class="post d-flex flex-column-fluid" id="kt_post">
        <div class="container-fluid">
            <div class="card card-flush">

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="kt_datatable_example table table-hover align-middle table-row-dashed fs-6 gy-5"
                            id="kt_datatable_example">
                            <thead>
                                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                                    {{-- <th class="w-10px pe-2">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                            <input class="form-check-input" type="checkbox" data-kt-check="true"
                                                data-kt-check-target="#kt_message_table .form-check-input"
                                                value="1" />
                                        </div>
                                    </th> --}}
                                    <th width="5%" class="text-center">Sl</th>
                                    <th width="15%" class="text-center">Name</th>
                                    <th width="20%" class="text-center">Email</th>
                                    <th width="5%" class="text-center">Message</th>
                                    <th width="10%" class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody class="text-center fw-bold text-gray-600">
                                @forelse ($contacts as $contact)
                                    <tr>
                                        {{-- <td>
                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                            </div>
                                        </td> --}}
                                        <td>
                                            <span class="fw-bolder"> {{ $loop->iteration }}</span>
                                        </td>
                                        <td>
                                            <span class="fw-bolder"> {{ $contact->name }}</span>
                                        </td>
                                        <td>
                                            <span class="fw-bolder"> {{ $contact->email }}</span>
                                        </td>
                                        <td>
                                            <span class="fw-bolder"> {{ $contact->message }}</span>
                                        </td>
                                        <td class="text-center">
                                            @if (Auth::guard('admin')->user()->can('delete.contact_message'))
                                                <a href="{{ route('admin.contacts.destroy', $contact->id) }}"
                                                    class="menu-link px-3 delete">Delete</a>
                                            @endif
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-app-layout>
