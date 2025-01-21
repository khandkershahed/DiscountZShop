<x-admin-app-layout :title="'Brand Add'">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div>
                            <h2>Brand Create</h2>
                        </div>
                        <div>
                            <a href="{{ route('admin.brands.index') }}" class="btn btn-light-info">
                                <span class="svg-icon svg-icon-3">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path fill="currentColor" d="M14 17l-5-5 5-5v10z"/>
                                    </svg>

                                </span>

                                Back to the list
                            </a>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        {{-- <form class="form" action="{{ route('admin.brands.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf --}}

                        <div class="row">
                            <div class="col-lg-2 pe-0" style="border-right: 1px solid #f6f5f4">
                                <ul class="nav nav-tabs nav-pills border-0 flex-row flex-md-column mb-3 mb-md-0 fs-6 border-1 border-light"
                                    role="tablist">
                                    <li class="nav-item w-md-290px m-0" role="presentation">
                                        <a class="nav-link p-5 rounded-0 active tab-trigger" data-bs-toggle="tab"
                                            href="#kt_vtab_pane_1" aria-selected="true" role="tab">Overview</a>
                                    </li>
                                    <li class="nav-item w-md-290px m-0" role="presentation">
                                        <a class="nav-link p-5 rounded-0 tab-trigger" onclick="overviewAlert(event)"
                                            data-bs-toggle="tab" href="#kt_vtab_pane_2" aria-selected="true"
                                            role="tab">Stores</a>
                                    </li>
                                    <li class="nav-item w-md-290px m-0">
                                        <a class="nav-link p-5 rounded-0 tab-trigger" onclick="overviewAlert(event)"
                                            data-bs-toggle="tab" href="#kt_vtab_pane_3" aria-selected="true"
                                            role="tab">Offers</a>
                                    </li>
                                </ul>

                            </div>
                            <div class="col-lg-10 ps-0">
                                <div class="p-5">

                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade active show" id="kt_vtab_pane_1" role="tabpanel">
                                            <div class="w-100">
                                                <div class="pb-5 pb-lg-5">
                                                    <h2
                                                        class="fw-bolder d-flex justify-content-center align-items-center text-dark">
                                                        General Info
                                                    </h2>
                                                    <p class="text-center p-0 m-0">
                                                        <small class="ms-4 text-danger fw-normal fs-sm-9">
                                                            All The Red Star Mark Field Is Required.
                                                        </small>
                                                    </p>
                                                </div>
                                                <div class="fv-row">
                                                    @include('admin.pages.brands.partial.overview')
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        {{-- <div class="text-center pt-15">
                                    <x-metronic.button type="submit" class="primary">
                                        {{ __('Submit') }}
                                    </x-metronic.button>
                                </div> --}}

                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            function overviewAlert(event) {
                Swal.fire({
                    icon: 'warning',
                    title: 'You have to complete and save Brand Overview first!',
                });
                return false;
            }
            $(document).ready(function() {

                $('.tab-trigger').on('show.bs.tab', function(event) {
                    return overviewAlert($(this));
                });
                // On click of 'Next' tab


            });
        </script>

        <!-- Include jQuery Validation plugin -->


        <script>
            $(document).ready(function() {
                // Initialize the form validation
                $('#brandForm').validate({
                    // Define the validation rules
                    rules: {
                        category_id: { required: true },
                        category_type: { required: true },
                        country_id: { required: true, minlength: 1 },
                        division_id: { required: true, minlength: 1 },
                        city_id: { required: true, minlength: 1 },
                        area_id: { required: true, minlength: 1 },
                        name: { required: true, minlength: 3 },
                        // url: { required: true, url: true },
                        status: { required: true },
                        // about_title: { required: true },
                        logo: { required: true },
                        banner_image: { required: true },
                        // offer_description_title: { required: true },
                        // description_title: { required: true },
                        // about: { required: true },
                        // offer_description: { required: true },
                        // description: { required: true }
                    },
                    // Define error messages
                    messages: {
                        category_id: { required: "Please select a category." },
                        category_type: { required: "Please select a category type." },
                        country_id: { required: "Please select at least one country." },
                        division_id: { required: "Please select at least one division." },
                        city_id: { required: "Please select at least one city." },
                        area_id: { required: "Please select at least one area." },
                        name: { required: "Please enter a name.", minlength: "Name should be at least 3 characters." },
                        url: { required: "Please enter a valid URL." },
                        logo: { required: "Please enter a valid Logo Image." },
                        banner_image: { required: "Please enter a valid Banner Image." },
                        status: { required: "Please select a status." },
                        about_title: { required: "Please enter a section title." },
                        offer_description_title: { required: "Please enter the offer description title." },
                        description_title: { required: "Please enter the description title." },
                        about: { required: "Please provide the section one description." },
                        offer_description: { required: "Please provide the section three description." },
                        description: { required: "Please provide the section four description." }
                    },
                    // Customize error display
                    errorClass: 'is-invalid',
                    validClass: 'is-valid',
                });

                // On clicking "Save & Continue", validate the form
                $('#brandForm').on('submit', function(e) {
                    e.preventDefault(); // Prevent default form submission

                    // Check if the form is valid
                    if ($('#brandForm').valid()) {
                        // If valid, submit the form
                        this.submit();
                    } else {
                        // If invalid, collect the error messages
                        var errorMessages = [];

                        // Loop through each field and collect the error message for invalid fields
                        $.each($('#brandForm').validate().errorList, function(index, error) {
                            errorMessages.push(error.message);
                        });

                        // Display the error messages in a SweetAlert list
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            html: '<ul>' + errorMessages.map(function(msg) {
                                return '<li>' + msg + '</li>';
                            }).join('') + '</ul>',
                        });
                    }
                });
            });

        </script>
    @endpush

</x-admin-app-layout>
