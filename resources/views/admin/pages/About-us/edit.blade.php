<x-admin-app-layout :title="'About Us Edit'">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <div class="row">
        <div class="col-11 mx-auto">
            <div class="card">

                <div class="card-body">

                    <form action="{{ route('admin.about-us.update', $about->id) }}" method="POST" id="myForm"
                        enctype="multipart/form-data">

                        @csrf

                        @method('PUT')



                        {{-- banner_image --}}
                        <div class="mt-1 mb-2">
                            <p class="text-white bg-info text-center shadow-sm"
                                style="position: relative;  top: 20px; width: 10%">Banner Image</p>
                            <div class="row border border-secondary pt-3">
                                <div class="mb-2">
                                    <div class="form-group">
                                        <label class="form-label">Banner Image</label>
                                        <input type="file" class="form-control form-control-sm" name="banner_image">

                                        <img class="mt-3"
                                            src="{{ !empty($about->banner_image) ? url('storage/' . $about->banner_image) : 'https://ui-avatars.com/api/' }}"
                                            height="80" width="80" alt="">

                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Row One -->
                        <div class="mt-2 mb-2">

                            <p class="text-white bg-info text-center shadow-sm"
                                style="position: relative;  top: 20px; width: 10%">Row One Area</p>

                            <div class="row border border-secondary pt-3">

                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row One Column Icon</label>
                                        <input type="file" accept="image/*"
                                            class="imageUpload form-control form-control-sm"
                                            name="row_one_column_one_icon">

                                        <img class="mt-3"
                                            src="{{ !empty($about->row_one_column_one_icon) ? url('storage/' . $about->row_one_column_one_icon) : 'https://ui-avatars.com/api/' }}"
                                            height="80" width="80" alt="">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row One Column Title</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_one_column_one_title }}"
                                            name="row_one_column_one_title">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row One Column Url</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_one_column_one_url }}" name="row_one_column_one_url">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row One Column Description</label>
                                        <textarea name="row_one_column_one_description" placeholder="Row One Description" class="form-control form-control-sm"
                                            cols="3" rows="3">{!! $about->row_one_column_one_description !!}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Two Column Icon</label>
                                        <input type="file" accept="image/*"
                                            class="imageUpload form-control form-control-sm"
                                            name="row_one_column_two_icon">

                                        <img class="mt-3"
                                            src="{{ !empty($about->row_one_column_two_icon) ? url('storage/' . $about->row_one_column_two_icon) : 'https://ui-avatars.com/api/' }}"
                                            height="80" width="80" alt="">

                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Two Column Title</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_one_column_two_title }}"
                                            name="row_one_column_two_title">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Two Column Url</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_one_column_two_url }}" name="row_one_column_two_url">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Two Column Description</label>
                                        <textarea name="row_one_column_two_description" placeholder="Row Two Description" class="form-control form-control-sm"
                                            cols="3" rows="3">{!! $about->row_one_column_two_description !!}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Three Column Icon</label>
                                        <input type="file" accept="image/*"
                                            class="imageUpload form-control form-control-sm"
                                            name="row_one_column_three_icon">

                                        <img class="mt-3"
                                            src="{{ !empty($about->row_one_column_three_icon) ? url('storage/' . $about->row_one_column_three_icon) : 'https://ui-avatars.com/api/' }}"
                                            height="80" width="80" alt="">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Three Column Title</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_one_column_three_title }}"
                                            name="row_one_column_three_title">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Three Column Url</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_one_column_three_url }}"
                                            name="row_one_column_three_url">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row One Image</label>
                                        <input type="file" class="form-control form-control-sm" name="row_one_image">
                                    </div>
                                    <img class="mt-3"
                                        src="{{ !empty($about->row_one_image) ? url('storage/' . $about->row_one_image) : asset('images/no-image(random).png') }}"
                                        height="80" width="80" alt="">
                                </div>


                                <div class="col-lg-12">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Three Column Description</label>
                                        <textarea name="row_one_column_three_description" placeholder="Row Three Description"
                                            class="form-control form-control-sm" cols="3" rows="3">{!! $about->row_one_column_three_description !!}</textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Row One End-->

                        <!-- Row Two -->
                        <div class="mt-2 mb-2">

                            <p class="text-white bg-info text-center shadow-sm"
                                style="position: relative;  top: 20px; width: 10%">Row Two Area</p>

                            <div class="row border border-secondary pt-3">


                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Two Badge</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_two_badge }}" name="row_two_badge">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Two Title</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_two_title }}" name="row_two_title">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Two Button Name</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_two_button_name }}" name="row_two_button_name">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Two Button Url</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_two_button_url }}" name="row_two_button_url">
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Two Description</label>
                                        <textarea name="row_two_description" placeholder="Row Two Description" class="form-control form-control-sm"
                                            cols="3" rows="3">{!! $about->row_two_description !!}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Two Image</label>
                                        <input type="file" accept="image/*"
                                            class="imageUpload form-control form-control-sm" name="row_two_image">

                                        <img class="mt-3"
                                            src="{{ !empty($about->row_two_image) ? url('storage/' . $about->row_two_image) : asset('images/no-image(random).png') }}"
                                            height="80" width="80" alt="">
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Row Two End-->

                        <!-- Row Three -->
                        {{-- <div class="mt-2 mb-2">

                            <p class="text-white bg-info text-center shadow-sm"
                                style="position: relative;  top: 20px; width: 10%">Row Three Area</p>

                            <div class="row border border-secondary pt-3">


                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Three Badge</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_three_badge }}" name="row_three_badge">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Three Title</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_three_title }}" name="row_three_title">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Three Button Name</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_three_button_name }}" name="row_three_button_name">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Three Button Url</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_three_button_url }}" name="row_three_button_url">
                                    </div>
                                </div>

                                <div class="col-lg-8">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Three Description</label>
                                        <textarea name="row_three_description" placeholder="Row Three Description" class="form-control form-control-sm"
                                            cols="3" rows="3">{!! $about->row_three_description !!}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Three Image</label>
                                        <input type="file" accept="image/*"
                                            class="imageUpload form-control form-control-sm" name="row_three_image">

                                        <img class="mt-3"
                                            src="{{ !empty($about->row_three_image) ? url('storage/' . $about->row_three_image) : asset('images/no-image(random).png') }}"
                                            height="80" width="80" alt="">
                                    </div>
                                </div>

                            </div>
                        </div> --}}
                        <!-- Row Three End-->

                        <!-- Row Four -->
                        <div class="mt-2 mb-2">

                            <p class="text-white bg-info text-center shadow-sm"
                                style="position: relative;  top: 20px; width: 10%">Row Four Area</p>

                            <div class="row border border-secondary pt-3">


                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Four Badge</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_four_badge }}" name="row_four_badge">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Four Title</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_four_title }}" name="row_four_title">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Four Button Name</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_four_button_name }}" name="row_four_button_name">
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Four Button Url</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_four_button_url }}" name="row_four_button_url">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Four Description</label>
                                        <textarea name="row_four_description" placeholder="Row Four Description" class="form-control form-control-sm"
                                            cols="3" rows="3">{!! $about->row_four_description !!}</textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Row Four End-->

                        <!-- Row Five -->
                        <div class="mt-2 mb-2">

                            <p class="text-white bg-info text-center shadow-sm"
                                style="position: relative;  top: 20px; width: 10%">Row Five Area</p>

                            <div class="row border border-secondary pt-3">


                                <div class="col-lg-12 mb-4">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Five Bg Image</label>
                                        <input type="file" class="form-control form-control-sm"
                                            name="row_five_bg_image">

                                        <img class="mt-3"
                                            src="{{ !empty($about->row_five_bg_image) ? url('storage/' . $about->row_five_bg_image) : 'https://ui-avatars.com/api/' }}"
                                            height="80" width="80" alt="">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Five Column One Icon</label>
                                        <input type="file" class="form-control form-control-sm"
                                            name="row_five_column_one_icon">

                                        <img class="mt-3"
                                            src="{{ !empty($about->row_five_column_one_icon) ? url('storage/' . $about->row_five_column_one_icon) : 'https://ui-avatars.com/api/' }}"
                                            height="80" width="80" alt="">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Five Column One Title</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_five_column_one_title }}"
                                            name="row_five_column_one_title">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Five Column One Url</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_five_column_one_url }}"
                                            name="row_five_column_one_url">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Five Column One Description</label>
                                        <textarea name="row_five_column_one_description" placeholder="Row Five Column One Description"
                                            class="form-control form-control-sm" cols="3" rows="3">{!! $about->row_five_column_one_description !!}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Five Column Two Icon</label>
                                        <input type="file" class="form-control form-control-sm"
                                            name="row_five_column_two_icon">

                                        <img class="mt-3"
                                            src="{{ !empty($about->row_five_column_two_icon) ? url('storage/' . $about->row_five_column_two_icon) : 'https://ui-avatars.com/api/' }}"
                                            height="80" width="80" alt="">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Five Column Two Title</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_five_column_two_title }}"
                                            name="row_five_column_two_title">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Five Column Two Url</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_five_column_two_url }}"
                                            name="row_five_column_two_url">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Five Column Two Description</label>
                                        <textarea name="row_five_column_two_description" placeholder="Row Five Column Two Description"
                                            class="form-control form-control-sm" cols="3" rows="3">{!! $about->row_five_column_two_description !!}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Five Column Three Icon</label>
                                        <input type="file" class="form-control form-control-sm"
                                            name="row_five_column_three_icon">

                                        <img class="mt-3"
                                            src="{{ !empty($about->row_five_column_three_icon) ? url('storage/' . $about->row_five_column_three_icon) : 'https://ui-avatars.com/api/' }}"
                                            height="80" width="80" alt="">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Five Column Three Title</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_five_column_three_title }}"
                                            name="row_five_column_three_title">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Five Column Three Url</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_five_column_three_url }}"
                                            name="row_five_column_three_url">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Five Column Three Description</label>
                                        <textarea name="row_five_column_three_description" placeholder="Row Five Column Three Description"
                                            class="form-control form-control-sm" cols="3" rows="3">{!! $about->row_five_column_three_description !!}</textarea>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Five Column Four Icon</label>
                                        <input type="file" class="form-control form-control-sm"
                                            name="row_five_column_four_icon">

                                        <img class="mt-3"
                                            src="{{ !empty($about->row_five_column_four_icon) ? url('storage/' . $about->row_five_column_four_icon) : 'https://ui-avatars.com/api/' }}"
                                            height="80" width="80" alt="">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Five Column Four Title</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_five_column_four_title }}"
                                            name="row_five_column_four_title">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Five Column Four Url</label>
                                        <input type="text" class="form-control form-control-sm"
                                            value="{{ $about->row_five_column_four_url }}"
                                            name="row_five_column_four_url">
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="mb-2">
                                        <label class="col-form-label pt-0">Row Five Column Four Description</label>
                                        <textarea name="row_five_column_four_description" placeholder="Row Five Column Four Description"
                                            class="form-control form-control-sm" cols="3" rows="3">{!! $about->row_five_column_four_description !!}</textarea>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Row Five End-->


                        <div class="row mt-5">
                            <div class="col-12 text-end" style="padding-right: 0;">
                                <button type="submit" class="btn btn-primary rounded-0">Save changes</button>
                            </div>
                        </div>


                    </form>

                </div>

            </div>
        </div>

    </div>

</x-admin-app-layout>
