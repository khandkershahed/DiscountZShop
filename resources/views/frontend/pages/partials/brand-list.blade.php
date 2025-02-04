<!-- frontend.pages.partials.brand-list.blade.php -->
@foreach ($brands as $brand)
    <div class="col-lg-2 col-4 mb-3 mt-2">
        <a href="{{ route('brand.details', $brand->slug) }}">
            <div class="card shadow-sm brands-card">
                <div class="card-body p-0">
                    <div class="brands-logo">
                        <img class="img-fluid rounded-3" src="{{ asset('storage/' . $brand->logo) }}" alt="Brand Logo"
                            title="Brand Logo"
                            onerror="this.onerror=null; this.src='{{ asset('images/brandPage-prod-no-img(376-282).png') }}';" />
                    </div>
                </div>
            </div>
        </a>
    </div>
@endforeach
