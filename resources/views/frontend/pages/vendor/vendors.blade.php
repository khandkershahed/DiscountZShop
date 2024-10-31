<x-frontend-app-layout :title="'All Vendors || DiscountZShop'">
    <!-- Hero Section -->
    <section>
        <div class="regular-banner">
            <img class="img-fluid w-100" style="height: 500px; max-height: 100%;"
                src="{{ asset('images/vendors_no_banner.png') }}" alt="All Vendors" />
        </div>
    </section>
    <!-- Hero End -->
    <section>
        <div class="container">
            <div class="row py-5">
                <div class="col-lg-12">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex align-items-center">
                            <h3>All Vendors</h3>
                            <span class="store-devider"></span>
                        </div>
                        <div class="d-flex align-items-center">
                            <!-- Search Store -->
                            <div class="wrapper-store">
                                <div class="search-input-store">
                                    <input type="text" id="serviceSearch" autocomplete="off" name=""
                                        placeholder="Type to search...">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Vendors Row One --}}
            <div class="row pb-1 servicesContainer divisionContainer cityContainer">
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-0 rounded-2">
                            <!-- Store Banner -->
                            <div class="main-store-banner">
                                <img class="img-fluid rounded-2"
                                    src="http://127.0.0.1:8000/storage/store/image/npVp6ZkJKd1726118115.png"
                                    alt="arong-banner.jpg">
                            </div>
                            <!-- Store Logo And Rating -->
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="store-logo">
                                        <img class="img-fluid"
                                            src="http://127.0.0.1:8000/storage/store/logo/1GLLyRpl481726118115.png"
                                            alt="arong-logo.png">
                                    </div>
                                    <div class="store-rating">
                                        <a href="http://127.0.0.1:8000/store/1"
                                            class="btn btn-common-one rounded-circle store-btn"><i
                                                class="fa-solid fa-store" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                </div>
                                <!-- Store Info -->
                                <div class="pt-4 d-flex justify-content-between store_title">
                                    <a href="http://127.0.0.1:8000/store/1">
                                        <div>
                                            <h5 style="width: 98%;margin-bottom: 0.75rem;">Aarong</h5>
                                            <p>Aarong Centre (Head Office) 346 Tejgaon I/A, Tejgaon Link Rd, Tejgaon,
                                                Dhaka</p>
                                        </div>
                                    </a>
                                    <div>
                                        <button class="btn border-0 p-0 m-0 ps-2">
                                            <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                title="Store Location" data-bs-toggle="modal"
                                                data-bs-target="#store-Location" aria-hidden="true"></i><span
                                                class="sr-only">Store Location</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                    <span class="bg-danger badge fw-normal">
                                        <i class="fa-solid fa-percent pe-2" aria-hidden="true"></i>OFFER
                                    </span>
                                    <small class="text-sm">
                                        Get UpTo <span class="main-color"></span> Off
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-0 rounded-2">
                            <!-- Store Banner -->
                            <div class="main-store-banner">
                                <img class="img-fluid rounded-2"
                                    src="http://127.0.0.1:8000/storage/store/image/npVp6ZkJKd1726118115.png"
                                    alt="arong-banner.jpg">
                            </div>
                            <!-- Store Logo And Rating -->
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="store-logo">
                                        <img class="img-fluid"
                                            src="http://127.0.0.1:8000/storage/store/logo/1GLLyRpl481726118115.png"
                                            alt="arong-logo.png">
                                    </div>
                                    <div class="store-rating">
                                        <a href="http://127.0.0.1:8000/store/1"
                                            class="btn btn-common-one rounded-circle store-btn"><i
                                                class="fa-solid fa-store" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                </div>
                                <!-- Store Info -->
                                <div class="pt-4 d-flex justify-content-between store_title">
                                    <a href="http://127.0.0.1:8000/store/1">
                                        <div>
                                            <h5 style="width: 98%;margin-bottom: 0.75rem;">Aarong</h5>
                                            <p>Aarong Centre (Head Office) 346 Tejgaon I/A, Tejgaon Link Rd, Tejgaon,
                                                Dhaka</p>
                                        </div>
                                    </a>
                                    <div>
                                        <button class="btn border-0 p-0 m-0 ps-2">
                                            <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                title="Store Location" data-bs-toggle="modal"
                                                data-bs-target="#store-Location" aria-hidden="true"></i><span
                                                class="sr-only">Store Location</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                    <span class="bg-danger badge fw-normal">
                                        <i class="fa-solid fa-percent pe-2" aria-hidden="true"></i>OFFER
                                    </span>
                                    <small class="text-sm">
                                        Get UpTo <span class="main-color"></span> Off
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-0 rounded-2">
                            <!-- Store Banner -->
                            <div class="main-store-banner">
                                <img class="img-fluid rounded-2"
                                    src="http://127.0.0.1:8000/storage/store/image/npVp6ZkJKd1726118115.png"
                                    alt="arong-banner.jpg">
                            </div>
                            <!-- Store Logo And Rating -->
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="store-logo">
                                        <img class="img-fluid"
                                            src="http://127.0.0.1:8000/storage/store/logo/1GLLyRpl481726118115.png"
                                            alt="arong-logo.png">
                                    </div>
                                    <div class="store-rating">
                                        <a href="http://127.0.0.1:8000/store/1"
                                            class="btn btn-common-one rounded-circle store-btn"><i
                                                class="fa-solid fa-store" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                </div>
                                <!-- Store Info -->
                                <div class="pt-4 d-flex justify-content-between store_title">
                                    <a href="http://127.0.0.1:8000/store/1">
                                        <div>
                                            <h5 style="width: 98%;margin-bottom: 0.75rem;">Aarong</h5>
                                            <p>Aarong Centre (Head Office) 346 Tejgaon I/A, Tejgaon Link Rd, Tejgaon,
                                                Dhaka</p>
                                        </div>
                                    </a>
                                    <div>
                                        <button class="btn border-0 p-0 m-0 ps-2">
                                            <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                title="Store Location" data-bs-toggle="modal"
                                                data-bs-target="#store-Location" aria-hidden="true"></i><span
                                                class="sr-only">Store Location</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                    <span class="bg-danger badge fw-normal">
                                        <i class="fa-solid fa-percent pe-2" aria-hidden="true"></i>OFFER
                                    </span>
                                    <small class="text-sm">
                                        Get UpTo <span class="main-color"></span> Off
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-0 rounded-2">
                            <!-- Store Banner -->
                            <div class="main-store-banner">
                                <img class="img-fluid rounded-2"
                                    src="http://127.0.0.1:8000/storage/store/image/npVp6ZkJKd1726118115.png"
                                    alt="arong-banner.jpg">
                            </div>
                            <!-- Store Logo And Rating -->
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="store-logo">
                                        <img class="img-fluid"
                                            src="http://127.0.0.1:8000/storage/store/logo/1GLLyRpl481726118115.png"
                                            alt="arong-logo.png">
                                    </div>
                                    <div class="store-rating">
                                        <a href="http://127.0.0.1:8000/store/1"
                                            class="btn btn-common-one rounded-circle store-btn"><i
                                                class="fa-solid fa-store" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                </div>
                                <!-- Store Info -->
                                <div class="pt-4 d-flex justify-content-between store_title">
                                    <a href="http://127.0.0.1:8000/store/1">
                                        <div>
                                            <h5 style="width: 98%;margin-bottom: 0.75rem;">Aarong</h5>
                                            <p>Aarong Centre (Head Office) 346 Tejgaon I/A, Tejgaon Link Rd, Tejgaon,
                                                Dhaka</p>
                                        </div>
                                    </a>
                                    <div>
                                        <button class="btn border-0 p-0 m-0 ps-2">
                                            <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                title="Store Location" data-bs-toggle="modal"
                                                data-bs-target="#store-Location" aria-hidden="true"></i><span
                                                class="sr-only">Store Location</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                    <span class="bg-danger badge fw-normal">
                                        <i class="fa-solid fa-percent pe-2" aria-hidden="true"></i>OFFER
                                    </span>
                                    <small class="text-sm">
                                        Get UpTo <span class="main-color"></span> Off
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Vendors Row Two --}}
            <div class="row pb-1 servicesContainer divisionContainer cityContainer">
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-0 rounded-2">
                            <!-- Store Banner -->
                            <div class="main-store-banner">
                                <img class="img-fluid rounded-2"
                                    src="http://127.0.0.1:8000/storage/store/image/npVp6ZkJKd1726118115.png"
                                    alt="arong-banner.jpg">
                            </div>
                            <!-- Store Logo And Rating -->
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="store-logo">
                                        <img class="img-fluid"
                                            src="http://127.0.0.1:8000/storage/store/logo/1GLLyRpl481726118115.png"
                                            alt="arong-logo.png">
                                    </div>
                                    <div class="store-rating">
                                        <a href="http://127.0.0.1:8000/store/1"
                                            class="btn btn-common-one rounded-circle store-btn"><i
                                                class="fa-solid fa-store" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                </div>
                                <!-- Store Info -->
                                <div class="pt-4 d-flex justify-content-between store_title">
                                    <a href="http://127.0.0.1:8000/store/1">
                                        <div>
                                            <h5 style="width: 98%;margin-bottom: 0.75rem;">Aarong</h5>
                                            <p>Aarong Centre (Head Office) 346 Tejgaon I/A, Tejgaon Link Rd, Tejgaon,
                                                Dhaka</p>
                                        </div>
                                    </a>
                                    <div>
                                        <button class="btn border-0 p-0 m-0 ps-2">
                                            <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                title="Store Location" data-bs-toggle="modal"
                                                data-bs-target="#store-Location" aria-hidden="true"></i><span
                                                class="sr-only">Store Location</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                    <span class="bg-danger badge fw-normal">
                                        <i class="fa-solid fa-percent pe-2" aria-hidden="true"></i>OFFER
                                    </span>
                                    <small class="text-sm">
                                        Get UpTo <span class="main-color"></span> Off
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-0 rounded-2">
                            <!-- Store Banner -->
                            <div class="main-store-banner">
                                <img class="img-fluid rounded-2"
                                    src="http://127.0.0.1:8000/storage/store/image/npVp6ZkJKd1726118115.png"
                                    alt="arong-banner.jpg">
                            </div>
                            <!-- Store Logo And Rating -->
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="store-logo">
                                        <img class="img-fluid"
                                            src="http://127.0.0.1:8000/storage/store/logo/1GLLyRpl481726118115.png"
                                            alt="arong-logo.png">
                                    </div>
                                    <div class="store-rating">
                                        <a href="http://127.0.0.1:8000/store/1"
                                            class="btn btn-common-one rounded-circle store-btn"><i
                                                class="fa-solid fa-store" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                </div>
                                <!-- Store Info -->
                                <div class="pt-4 d-flex justify-content-between store_title">
                                    <a href="http://127.0.0.1:8000/store/1">
                                        <div>
                                            <h5 style="width: 98%;margin-bottom: 0.75rem;">Aarong</h5>
                                            <p>Aarong Centre (Head Office) 346 Tejgaon I/A, Tejgaon Link Rd, Tejgaon,
                                                Dhaka</p>
                                        </div>
                                    </a>
                                    <div>
                                        <button class="btn border-0 p-0 m-0 ps-2">
                                            <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                title="Store Location" data-bs-toggle="modal"
                                                data-bs-target="#store-Location" aria-hidden="true"></i><span
                                                class="sr-only">Store Location</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                    <span class="bg-danger badge fw-normal">
                                        <i class="fa-solid fa-percent pe-2" aria-hidden="true"></i>OFFER
                                    </span>
                                    <small class="text-sm">
                                        Get UpTo <span class="main-color"></span> Off
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-0 rounded-2">
                            <!-- Store Banner -->
                            <div class="main-store-banner">
                                <img class="img-fluid rounded-2"
                                    src="http://127.0.0.1:8000/storage/store/image/npVp6ZkJKd1726118115.png"
                                    alt="arong-banner.jpg">
                            </div>
                            <!-- Store Logo And Rating -->
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="store-logo">
                                        <img class="img-fluid"
                                            src="http://127.0.0.1:8000/storage/store/logo/1GLLyRpl481726118115.png"
                                            alt="arong-logo.png">
                                    </div>
                                    <div class="store-rating">
                                        <a href="http://127.0.0.1:8000/store/1"
                                            class="btn btn-common-one rounded-circle store-btn"><i
                                                class="fa-solid fa-store" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                </div>
                                <!-- Store Info -->
                                <div class="pt-4 d-flex justify-content-between store_title">
                                    <a href="http://127.0.0.1:8000/store/1">
                                        <div>
                                            <h5 style="width: 98%;margin-bottom: 0.75rem;">Aarong</h5>
                                            <p>Aarong Centre (Head Office) 346 Tejgaon I/A, Tejgaon Link Rd, Tejgaon,
                                                Dhaka</p>
                                        </div>
                                    </a>
                                    <div>
                                        <button class="btn border-0 p-0 m-0 ps-2">
                                            <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                title="Store Location" data-bs-toggle="modal"
                                                data-bs-target="#store-Location" aria-hidden="true"></i><span
                                                class="sr-only">Store Location</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                    <span class="bg-danger badge fw-normal">
                                        <i class="fa-solid fa-percent pe-2" aria-hidden="true"></i>OFFER
                                    </span>
                                    <small class="text-sm">
                                        Get UpTo <span class="main-color"></span> Off
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body p-0 rounded-2">
                            <!-- Store Banner -->
                            <div class="main-store-banner">
                                <img class="img-fluid rounded-2"
                                    src="http://127.0.0.1:8000/storage/store/image/npVp6ZkJKd1726118115.png"
                                    alt="arong-banner.jpg">
                            </div>
                            <!-- Store Logo And Rating -->
                            <div class="px-3 pb-3">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="store-logo">
                                        <img class="img-fluid"
                                            src="http://127.0.0.1:8000/storage/store/logo/1GLLyRpl481726118115.png"
                                            alt="arong-logo.png">
                                    </div>
                                    <div class="store-rating">
                                        <a href="http://127.0.0.1:8000/store/1"
                                            class="btn btn-common-one rounded-circle store-btn"><i
                                                class="fa-solid fa-store" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                </div>
                                <!-- Store Info -->
                                <div class="pt-4 d-flex justify-content-between store_title">
                                    <a href="http://127.0.0.1:8000/store/1">
                                        <div>
                                            <h5 style="width: 98%;margin-bottom: 0.75rem;">Aarong</h5>
                                            <p>Aarong Centre (Head Office) 346 Tejgaon I/A, Tejgaon Link Rd, Tejgaon,
                                                Dhaka</p>
                                        </div>
                                    </a>
                                    <div>
                                        <button class="btn border-0 p-0 m-0 ps-2">
                                            <i class="fa-solid fa-location-dot ps-1 main-color fs-3"
                                                title="Store Location" data-bs-toggle="modal"
                                                data-bs-target="#store-Location" aria-hidden="true"></i><span
                                                class="sr-only">Store Location</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="bg-light mt-3 d-flex justify-content-between mb-3 p-2 rounded-3">
                                    <span class="bg-danger badge fw-normal">
                                        <i class="fa-solid fa-percent pe-2" aria-hidden="true"></i>OFFER
                                    </span>
                                    <small class="text-sm">
                                        Get UpTo <span class="main-color"></span> Off
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-frontend-app-layout>
