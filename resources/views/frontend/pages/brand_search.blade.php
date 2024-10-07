@forelse ($categories as $category)
    @if ($category->brands->count() > 0)
        <div class="col-lg-6">
            <div class="row bg-light mb-4">
                <div class="d-flex justify-content-between">
                    <div class="d-flex align-items-center">
                        <p class="mb-0 py-2 main-color">{{ $category->name }}</p>
                        <span class="store-devider"></span>
                    </div>
                </div>
                @foreach ($category->brands as $brand)
                    <div class="col-lg-4 mb-3 mt-2">
                        <a href="{{ route('brand.details', $brand->slug) }}">
                            <div class="card shadow-sm brands-card">
                                <div class="card-body p-0">
                                    <div class="brands-logo">
                                        <img class="img-fluid rounded-3" src="{{ asset('storage/' . $brand->logo) }}"
                                            alt="Brand Logo" title="Brand Logo"
                                            onerror="this.onerror=null; this.src='{{ asset('images/brandPage-prod-no-img(376-282).png') }}';" />
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
@empty
    <div class="text-center py-3">
        <img class="img-fluid" width="210px"
            src="https://i.ibb.co/Vg8gqx5/hand-drawn-no-data-illustration-23-2150696455.jpg" alt="No Content">
    </div>
    <h5 class="text-center text-warning">No Store available right now.</h5>
@endforelse
