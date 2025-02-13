{{-- Mobile Store Start --}}
<style>
    .brand-logo img {
        width: 90px;
        height: 85px;
        border-radius: 100%;
    }
</style>
<div class="row">
    @foreach ($mobile_brands as $mobile_brand)
        <div class="mb-3 col-3">
            <a href="{{ route('brand.details', $mobile_brand->slug) }}" class="">
                <div class="brand-logo">
                    <img class="img-fluid" src="{{ asset('storage/' . $mobile_brand->image) }}" alt="arong-logo.png"
                        onerror="this.onerror=null;this.src='http://www.discountzshop.com/storage/offer/logo/cDjFArhKif1737265807.png';" />
                </div>
                <p class="mt-2 category-title">{{ $mobile_brand->name }}</p>
            </a>
        </div>
    @endforeach
</div>
{{-- Mobile Store End --}}
