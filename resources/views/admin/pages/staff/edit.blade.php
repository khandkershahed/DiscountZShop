<x-admin-app-layout :title="'Staff Edit'">

    <div class="card card-flash">
        <div class="card-body scroll-y mx-5 mx-xl-15 my-7">
            <form class="form" method="POST" action="{{ route('admin.staff.update', $staff->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="row">
                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="name"
                            class="required fw-bold fs-6 mb-2">{{ __('Full Name') }}</x-metronic.label>
                        <x-metronic.input id="name" type="text" class="form-control-solid mb-3 mb-lg-0"
                            name="name" :value="old('name', $staff->name)" placeholder="Enter Full name"></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="username"
                            class="fw-bold fs-6 mb-2">{{ __('User Name') }}</x-metronic.label>
                        <x-metronic.input id="username" type="text" class="form-control-solid mb-3 mb-lg-0"
                            name="username" :value="old('username', $staff->username)" placeholder="Enter User name"></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="email"
                            class="required fw-bold fs-6 mb-2">{{ __('Email') }}</x-metronic.label>

                        <input type="text" value="{{ $staff->email }}" disabled class="form-control mb-3 mb-lg-0"
                        name="email">
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="phone"
                            class="fw-bold fs-6 mb-2">{{ __('Phone') }}</x-metronic.label>
                        <x-metronic.input id="phone" type="text" class="form-control-solid mb-3 mb-lg-0"
                            name="phone" :value="old('phone', $staff->phone)" placeholder="Phone"></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="designation"
                            class="fw-bold fs-6 mb-2">{{ __('Designation') }}</x-metronic.label>
                        <x-metronic.input id="designation" type="text" class="form-control-solid mb-3 mb-lg-0"
                            name="designation" :value="old('designation', $staff->designation)" placeholder="Designation"></x-metronic.input>
                    </div>

                    {{-- <div class="col-lg-3 mb-7">
                        <x-metronic.label for="password"
                            class="fw-bold fs-6 mb-2">{{ __('Password') }}</x-metronic.label>
                        <x-metronic.input id="password" type="password" class="form-control-solid mb-3 mb-lg-0"
                            name="password"
                            placeholder="Enter Password (leave blank to keep current)"></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="password_confirmation"
                            class="fw-bold fs-6 mb-2">{{ __('Confirm Password') }}</x-metronic.label>
                        <x-metronic.input id="password_confirmation" type="password"
                            class="form-control-solid mb-3 mb-lg-0" name="password_confirmation"
                            placeholder="Confirm the password (leave blank to keep current)"></x-metronic.input>
                    </div> --}}

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="status"
                            class="required fw-bold fs-6 mb-2">{{ __('Choose Status') }}</x-metronic.label>
                        <select name="status" required class="form-select" id="status">
                            <option disabled {{ $staff->status ? '' : 'selected' }}>Choose Option</option>
                            <option value="active" {{ $staff->status === 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ $staff->status === 'inactive' ? 'selected' : '' }}>Inactive
                            </option>
                        </select>
                        @error('status')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="mail_status"
                            class="fw-bold fs-6 mb-2">{{ __('Mail Status') }}</x-metronic.label>
                        <select name="mail_status" class="form-select" id="mail_status">
                            <option disabled {{ $staff->mail_status ? '' : 'selected' }}>Choose Option</option>
                            <option value="mail" {{ $staff->mail_status === 'mail' ? 'selected' : '' }}>Mail</option>
                            <option value="nomail" {{ $staff->mail_status === 'nomail' ? 'selected' : '' }}>No Mail
                            </option>
                        </select>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="biometric_id"
                            class="fw-bold fs-6 mb-2">{{ __('Biometric Id') }}</x-metronic.label>
                        <x-metronic.input id="biometric_id" type="number" class="form-control-solid mb-3 mb-lg-0"
                            name="biometric_id" :value="old('biometric_id', $staff->biometric_id)" placeholder="Biometric Id"></x-metronic.input>
                    </div>

                    <div class="col-lg-3 mb-7">
                        <x-metronic.label for="photo"
                            class="fw-bold fs-6 mb-2">{{ __('Photo') }}</x-metronic.label>
                        <x-metronic.file-input id="photo" type="file" class="form-control-solid mb-3 mb-lg-0"
                            name="photo" placeholder="Upload a photo"></x-metronic.file-input>

                        <img class="mt-3"
                            src="{{ !empty($staff->photo) ? url('storage/' . $staff->photo) : 'https://ui-avatars.com/api/?name=' . urlencode($staff->name) }}"
                            height="80" width="80" alt="{{ $staff->name }}">
                    </div>
                </div>


                <div class="float-end pt-10">
                    <x-metronic.button type="submit" class="primary">
                        {{ __('Save Changes') }}
                    </x-metronic.button>
                </div>
            </form>
        </div>
    </div>

</x-admin-app-layout>
