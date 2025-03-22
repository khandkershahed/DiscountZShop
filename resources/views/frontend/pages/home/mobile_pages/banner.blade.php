<div class="row">

    <div class="col-12">
        <div class="wrapper-search">
            <div class="search-input">

                <!-- Search Form -->
                <form class="d-flex" action="{{ route('product.search') }}" method="POST" role="search"
                    id="search-form">
                    @csrf

                    <input class="form-control w-100" autocomplete="off" required name="search" type="text"
                        placeholder="Search" aria-label="Search" id="search-input" />

                    <button class="btn position-relative border-0 bg-transparent search-action" type="submit"
                        id="search-btn" style="display: none;">
                        <i class="fa-solid fa-search text-muted"></i>
                    </button>
                </form>

                <!-- Dropdown for search suggestions -->
                <div id="search-suggestions" class="search-suggestions-dropdown"
                    style="display: none; position: absolute; width: 100%; background: white; border: 1px solid #ccc; z-index: 10;">
                </div>
                <!-- Search Form -->

            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="custom-slider pb-5 pt-3">
            <div>
                <a href="{{ $banner->image_one_url }}">
                    <img class="img-fluid fixed-size rounded-2"
                        src="{{ !empty($banner->image_one) ? url('storage/' . $banner->image_one) : asset('images/banner-demo.png') }}"
                        alt=""
                        onerror="this.onerror=null;this.src='{{ asset('images/banner-demo.png') }}';" />
                </a>
            </div>
            <div>
                <a href="{{ $banner->image_two_url }}">
                    <img class="img-fluid fixed-size rounded-2"
                        src="{{ !empty($banner->image_two) ? url('storage/' . $banner->image_two) : asset('images/banner-demo.png') }}"
                        alt=""
                        onerror="this.onerror=null;this.src='{{ asset('images/banner-demo.png') }}';" />
                </a>
            </div>
            <div>
                <a href="{{ $banner->image_three_url }}">
                    <img class="img-fluid fixed-size rounded-2"
                        src="{{ !empty($banner->image_three) ? url('storage/' . $banner->image_three) : asset('images/banner-demo.png') }}"
                        alt=""
                        onerror="this.onerror=null;this.src='{{ asset('images/banner-demo.png') }}';" />
                </a>
            </div>
        </div>
    </div>
</div>
