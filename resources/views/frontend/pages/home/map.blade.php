<section style="background-color: #f5f6f8">
    <div class="container pt-70 pb-70 px-0">
        <div class="row">
            <div class="col-lg-12 px-0">
                <div class="card rounded-0 shadow-sm p-3" style="background-color: #f5f6f8; border: 1px solid #EBEBEB;">
                    <div class="card-header border-0 py-3 bg-transparent">
                        <div class="row align-items-center">
                            <div class="col-lg-4">
                                <div class="d-flex align-items-center">
                                    <h4 class="coupon-title mb-0 pe-3">
                                        Grab By Location
                                    </h4>
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="31"
                                            viewBox="0 0 22 31" fill="none">
                                            <path
                                                d="M10.263 30.2372C9.84392 29.7675 0 18.6461 0 11.0705C5.93225e-05 4.96621 4.93463 0 11.0001 0C17.0655 0 22 4.96621 22 11.0705C22 18.6461 12.1561 29.7675 11.737 30.2372C11.3432 30.6786 10.6559 30.6777 10.263 30.2372Z"
                                                fill="#F15A2D" />
                                            <path
                                                d="M21.9999 11.0705C21.9999 4.96621 17.0653 0 11 0V30.5679C11.27 30.5679 11.5402 30.4579 11.737 30.2372C12.156 29.7675 21.9999 18.6461 21.9999 11.0705Z"
                                                fill="#F15A2D" />
                                            <path
                                                d="M10.9986 16.6402C7.94694 16.6402 5.46436 14.1416 5.46436 11.0704C5.46436 7.99912 7.94706 5.50049 10.9986 5.50049C14.0502 5.50049 16.5329 7.99912 16.5329 11.0704C16.5329 14.1416 14.0502 16.6402 10.9986 16.6402Z"
                                                fill="#F9F9F9" />
                                            <path
                                                d="M11 5.50049V16.6402C14.0517 16.6402 16.5343 14.1415 16.5343 11.0703C16.5343 7.99906 14.0515 5.50049 11 5.50049Z"
                                                fill="#C5D8DF" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="card-body p-2 py-0">
                        <div class="row">
                            <div class="col-lg-3" id="mapsidebar">
                                <div id="mapdetails">
                                    <!-- <p id="seriesName"></p> -->
                                    <div class="selected-point">
                                        <small class="text-white">All Of <span id="pointName"></span></small>

                                    </div>
                                    <!-- Selected Area All Zone Name  -->
                                    <div>
                                        <ul class="zone-name ps-0" style="list-style-type: none">
                                            <li class="area-names">No Area Available</li>
                                        </ul>
                                    </div>
                                    <!-- <p id="pointValue"></p> -->
                                </div>
                            </div>

                            <div class="col-lg-9 position-relative"
                                style="background-image: url({{ asset('frontend') }}/assets/img/product/map.png);background-size: contain;background-position: center;display: flex;align-items: center;">
                                <div id="mapcontainer" class="text-white"></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
