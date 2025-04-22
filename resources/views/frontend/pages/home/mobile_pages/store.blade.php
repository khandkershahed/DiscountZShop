{{-- Mobile Store Start --}}
<style>
    .brand-logo img {
        width: 90px;
        height: 85px;
        border-radius: 100%;
    }

    .category-logo {
        width: 100%;
        height: 100%;
        border-radius: 4px;
        padding: 3px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
    }
</style>
<div class="row gx-2">
    @foreach ($mobile_brands as $mobile_brand)
        <div class="mb-3 col-4">
            <a href="{{ route('brand.details', $mobile_brand->slug) }}" class="">
                {{-- <div class="brand-logo">
                    <img class="img-fluid" src="{{ asset('storage/' . $mobile_brand->image) }}" alt="arong-logo.png"
                        onerror="this.onerror=null;this.src='https://www.discountzshop.com/images/new1.gif';" />
                </div> --}}
                <div class="shadow-sm category-logo">
                    <img class="img-fluid"
                        src="{{ !empty($mobile_brand->logo) ? url('storage/' . $mobile_brand->logo) : 'N/A' }}"
                        alt="">
                </div>
                <p class="mt-2 category-title">{{ $mobile_brand->name }}</p>
            </a>
        </div>
    @endforeach
</div>
{{-- Mobile Store End --}}
