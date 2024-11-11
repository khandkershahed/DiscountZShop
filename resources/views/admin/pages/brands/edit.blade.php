<x-admin-app-layout :title="'Brand Edit'">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <div>
                            <h2>Brand Edit</h2>
                        </div>
                        <div>
                            <a href="{{ route('admin.brands.index') }}" class="btn btn-light-info">
                                <span class="svg-icon svg-icon-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5"
                                            fill="currentColor" />
                                        <rect x="10.8891" y="17.8033" width="12" height="2" rx="1"
                                            transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
                                        <rect x="6.01041" y="10.9247" width="12" height="2" rx="1"
                                            fill="currentColor" />
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
                                        <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                            href="#kt_vtab_pane_1" aria-selected="true" role="tab">Overview</a>
                                    </li>
                                    <li class="nav-item w-md-290px m-0" role="presentation">
                                        <a class="nav-link p-5 rounded-0 active tab-trigger" data-bs-toggle="tab"
                                            href="#kt_vtab_pane_2" aria-selected="false" role="tab">Stores</a>
                                    </li>
                                    <li class="nav-item w-md-290px m-0" role="presentation">
                                        <a class="nav-link p-5 rounded-0 tab-trigger" data-bs-toggle="tab"
                                            href="#kt_vtab_pane_3" aria-selected="false" role="tab"
                                            tabindex="-1">Offers</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-10 ps-0">
                                <div class="p-5">

                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade" id="kt_vtab_pane_1" role="tabpanel">
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
                                                    @include('admin.pages.brands.partial.edit_overview')
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade active show" id="kt_vtab_pane_2" role="tabpanel">
                                            <div class="w-100">

                                                <div class="fv-row brand_store">
                                                    @include('admin.pages.brands.partial.store')
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="kt_vtab_pane_3" role="tabpanel">
                                            <div class="w-100">
                                                <div class="fv-row brand_offer">
                                                    @include('admin.pages.brands.partial.offer')
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
            $(document).ready(function() {
                function validateAndSwitchTab(targetTabId) {
                    let isValid = true;
                    const activeTabHref = $('.tab-trigger.active').attr('href');

                    if (!isValid) {
                        return false;
                    } else {
                        // Instead of the alert, proceed with tab switch
                        switchTab(targetTabId);
                        return true;
                    }
                }

                function switchTab(targetTabId) {
                    $('.nav-link[href="' + targetTabId + '"]').tab('show');
                }

                $('.tab-trigger').on('show.bs.tab', function(event) {
                    return validateAndSwitchTab($(this).data('bs-target'));
                });

                $('.tab-content').on('input change', 'input, textarea, select', function() {
                    var $field = $(this);
                    var isSelect2 = $field.hasClass('select2-hidden-accessible');
                    if (isSelect2) {
                        $field.next('.select2-container').removeClass('is-invalid');
                    } else {
                        $field.removeClass('is-invalid');
                    }
                });

                // On click of 'Next' tab
                $('.tab-trigger-brand-next').on('click', function(event) {
                    const targetTabId = $(this).data('bs-target');
                    event.preventDefault(); // Prevent default action (tab switch)

                    // Serialize form data
                    var formData = new FormData($('#brandForm')[0]);
                    // Validate the current tab first
                    if (validateAndSwitchTab(targetTabId)) {
                        $.ajax({
                            url: $('#brandForm').attr('action'), // The route to update the brand
                            method: 'POST',
                            data: formData,
                            processData: false, // Don't process the data
                            contentType: false, // Don't set content-type header
                            success: function(response) {
                                if (response.success) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Brand updated successfully!',
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: response.error_message ||
                                            'Something went wrong!'
                                    });
                                }
                            },
                            error: function(xhr, status, error) {
                                // If AJAX fails (e.g., server error)
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'There was an error processing your request.'
                                });
                            }
                        });
                    }
                });
                $('.tab-trigger-offer-next').on('click', function(event) {
                    const targetTabId = $(this).data('bs-target');
                    event.preventDefault();

                    // Serialize form data
                    var formData = new FormData($('#storeForm')[0]);
                    if (validateAndSwitchTab(targetTabId)) {
                        $.ajax({
                            url: $('#storeForm').attr('action'),
                            method: 'POST',
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(response) {
                                if (response.success) {
                                    Swal.fire({
                                        icon: 'success',
                                        title: 'Store successfully!',
                                        showConfirmButton: false,
                                        timer: 1500
                                    });
                                    $(".brand_store").html(response.html)
                                } else {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Oops...',
                                        text: response.error_message
                                        // text: response.error_message ||
                                        //     'Something went wrong!'
                                    });
                                    return false;
                                }
                            },
                            error: function(xhr, status, error) {
                                // If AJAX fails (e.g., server error)
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Error',
                                    text: 'There was an error processing your request.'
                                });
                            }
                        });
                    }
                });

                // On click of 'Previous' tab
                $('.tab-trigger-previous').on('click', function(event) {
                    const targetTabId = $(this).data('bs-target');
                    validateAndSwitchTab(targetTabId);
                });
            });
        </script>


        <script>
            $(document).ready(function() {
                $('.stores').repeater({
                    initEmpty: false,
                    defaultValues: {
                        'text-input': 'foo'
                    },
                    show: function() {
                        $(this).slideDown();
                        $(this).find('[data-kt-repeater="select2"]').select2();
                        $(this).find('[data-kt-repeater="datepicker"]').flatpickr();
                        new Tagify(this.querySelector('[data-kt-repeater="tagify"]'));
                    },

                    hide: function(deleteElement) {
                        $(this).slideUp(deleteElement);
                    },

                    ready: function() {
                        $('[data-kt-repeater="select2"]').select2();
                        $('[data-kt-repeater="datepicker"]').flatpickr();
                        new Tagify(document.querySelector('[data-kt-repeater="tagify"]'));
                    }
                });
            });
        </script>
    @endpush




</x-admin-app-layout>
