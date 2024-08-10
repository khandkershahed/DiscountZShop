<x-admin-app-layout :title="'Division List'">
    <div class="card card-flash">
        <div class="card-header mt-6">
            <div class="card-title">
            </div>
            <div class="card-toolbar">

                <a href="javascript:void(0)" class="btn btn-light-primary" data-bs-toggle="modal"
                    data-bs-target="#AddModal">
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
                    Add Division
                </a>
            </div>
        </div>
        <div class="card-body pt-0">

            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_datatable_example">
                <thead>
                    <tr class="text-center text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                        <th>Sl</th>
                        <th>Country Name</th>
                        <th>Division Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody class="fw-bold">
                    @foreach ($divisions as $division)
                        <tr class="text-center fw-bolder fs-7 text-uppercase gs-0">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $division->country->name }}</td>
                            <td>{{ $division->name }}</td>
                            <td>
                                <span class="badge {{ $division->status == 'active' ? 'bg-success' : 'bg-danger' }}">
                                    {{ $division->status == 'active' ? 'Active' : 'InActive' }}</span>
                            </td>
                            <td>
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                    data-bs-toggle="modal" data-bs-target="#EditModal-{{ $division->id }}">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <a href="{{ route('admin.division.destroy', $division->id) }}"
                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1 delete">
                                    <i class="fa-solid fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>

        </div>
    </div>

    <div class="modal fade" id="AddModal" data-backdrop="static">
        <div class="modal-dialog modal-xl">
            <div class="modal-content rounded-0 border-0 shadow-sm">
                <div class="modal-header p-2 rounded-0">
                    <h5 class="modal-title ps-5">Add Division</h5>
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                        aria-label="Close">
                        <i class="fa-solid fa-circle-xmark"></i>
                    </div>
                </div>
                <form class="form" action="{{ route('admin.division.store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 mb-7">
                                <x-metronic.label for="country_id" class="col-form-label required fw-bold fs-6">
                                    {{ __('Select Country ') }}</x-metronic.label>
                                <x-metronic.select-option id="country_id" name="country_id" data-hide-search="true"
                                    data-placeholder="Select an option">
                                    <option></option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </x-metronic.select-option>
                            </div>
                            <div class="col-lg-6 mb-7">
                                <x-metronic.label for="name"
                                    class="col-form-label fw-bold fs-6 required">{{ __('Division Name') }}
                                </x-metronic.label>

                                <x-metronic.input id="name" type="text" name="name" :value="old('name')"
                                    placeholder="Enter the Name" required></x-metronic.input>
                            </div>
                            <div class="col-lg-6 mb-7">
                                <x-metronic.label for="latitude"
                                    class="col-form-label fw-bold fs-6">{{ __('Latitude') }}
                                </x-metronic.label>

                                <x-metronic.input id="latitude" type="text" name="latitude" :value="old('latitude')"
                                    placeholder="Enter the latitude" :maxlength="40"></x-metronic.input>
                            </div>
                            <div class="col-lg-6 mb-7">
                                <x-metronic.label for="longitude"
                                    class="col-form-label fw-bold fs-6">{{ __('Longitude') }}
                                </x-metronic.label>

                                <x-metronic.input id="longitude" type="text" name="longitude" :value="old('longitude')"
                                    placeholder="Enter the longitude" :maxlength="40"></x-metronic.input>
                            </div>
                            <div class="col-lg-6 mb-7">
                                <x-metronic.label for="status" class="col-form-label required fw-bold fs-6">
                                    {{ __('Select a Status ') }}</x-metronic.label>
                                <x-metronic.select-option id="status" name="status" data-hide-search="true"
                                    data-placeholder="Select an option">
                                    <option></option>
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                </x-metronic.select-option>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer p-2">
                        <x-metronic.button type="submit" class="primary">
                            {{ __('Submit') }}
                        </x-metronic.button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @foreach ($divisions as $division)
        <div class="modal fade" id="EditModal-{{ $division->id }}" data-backdrop="static">
            <div class="modal-dialog modal-xl">
                <div class="modal-content rounded-0 border-0 shadow-sm">
                    <div class="modal-header p-2 rounded-0">
                        <h5 class="modal-title ps-5">Edit Division</h5>
                        <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                            aria-label="Close">
                            <i class="fa-solid fa-circle-xmark"></i>
                        </div>
                    </div>
                    <form class="form" action="{{ route('admin.division.update', $division->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-lg-6 mb-7">
                                    <x-metronic.label for="country_id" class="col-form-label required fw-bold fs-6">
                                        {{ __('Select Country ') }}</x-metronic.label>
                                    <x-metronic.select-option id="country_id" name="country_id"
                                        data-hide-search="true" data-placeholder="Select an option">
                                        <option></option>
                                        @foreach ($countries as $country)
                                            <option value="{{ $country->id }}" @selected($country->id == $division->country_id)>
                                                {{ $country->name }}</option>
                                        @endforeach
                                    </x-metronic.select-option>
                                </div>
                                <div class="col-lg-6 mb-7">
                                    <x-metronic.label for="name"
                                        class="col-form-label fw-bold fs-6 required">{{ __('Division Name') }}
                                    </x-metronic.label>
                                    <x-metronic.input id="name" type="text" name="name" :value="old('name', $division->name)"
                                        placeholder="Enter the Name" required></x-metronic.input>
                                </div>
                                <div class="col-lg-6 mb-7">
                                    <x-metronic.label for="latitude"
                                        class="col-form-label fw-bold fs-6">{{ __('Latitude') }}
                                    </x-metronic.label>
                                    <x-metronic.input id="latitude" type="text" name="latitude" :value="old('latitude', $division->latitude)"
                                        placeholder="Enter the latitude" :maxlength="40"></x-metronic.input>
                                </div>
                                <div class="col-lg-6 mb-7">
                                    <x-metronic.label for="longitude"
                                        class="col-form-label fw-bold fs-6">{{ __('Longitude') }}
                                    </x-metronic.label>

                                    <x-metronic.input id="longitude" type="text" name="longitude"
                                        :value="old('longitude', $division->longitude)" placeholder="Enter the longitude"
                                        :maxlength="40"></x-metronic.input>
                                </div>
                                <div class="col-lg-6 mb-7">
                                    <x-metronic.label for="status" class="col-form-label required fw-bold fs-6">
                                        {{ __('Select a Status ') }}</x-metronic.label>
                                    <x-metronic.select-option id="status" name="status" data-hide-search="true"
                                        data-placeholder="Select an option">
                                        <option></option>
                                        <option value="active" @selected($division->status == 'active')>Active</option>
                                        <option value="inactive" @selected($division->status == 'inactive')>Inactive</option>
                                    </x-metronic.select-option>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer p-2">
                            <x-metronic.button type="submit" class="primary">
                                {{ __('Submit') }}
                            </x-metronic.button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

</x-admin-app-layout>
