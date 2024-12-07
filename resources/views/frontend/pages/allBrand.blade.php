<x-frontend-app-layout :title="'All Brands || DiscountZShop'">
    <section>
        <div class="regular-banner">
            <img class="img-fluid w-100"
                src="{{ !empty(optional($page_banner)->image) && file_exists(public_path('storage/' . optional($page_banner)->image)) ? asset('storage/' . optional($page_banner)->image) : asset('images/no-banner(1920-330).png') }}"
                alt="{{ ucfirst(optional($page_banner)->page_name) }}" />
        </div>
    </section>
    <!-- Brands All -->
    <section>
        <div class="container py-5">
            <div class="row pb-5">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1>Discover Our Esteemed Brands</h1>
                    </div>
                </div>
            </div>
            

            <div class="row gx-5" id="servicesContainer">
                @foreach ($categories as $category)
                    @if ($category->brands->count() > 0)
                        <div class="col-lg-12">
                            <div class="row bg-light">
                                <div class="d-flex justify-content-between">
                                    <div class="d-flex align-items-center">
                                        <p class="mb-0 py-2 main-color">{{ $category->name }}</p>
                                        <span class="store-devider"></span>
                                    </div>
                                    {{-- <div>
                                        <div class="pt-1">
                                            <span class="badge text-end rounded-0 store-tags">
                                                <span>30%</span>
                                            </span>
                                        </div>
                                    </div> --}}
                                </div>
                                @foreach ($category->brands as $brand)
                                    <div class="col-lg-2 mb-3 mt-2">
                                        <a href="{{ route('brand.details', $brand->slug) }}">
                                            <div class="card shadow-sm brands-card">
                                                <div class="card-body p-0">
                                                    <div class="brands-logo">
                                                        <img class="img-fluid rounded-3"
                                                            src="{{ asset('storage/' . $brand->logo) }}"
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
                @endforeach
            </div>

        </div>
    </section>
    <!-- Brands All End -->
    <section>
        <div class="container py-5 pt-0">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <h1>Big Brands Are Here</h1>
                        {{-- <p class="w-lg-50 w-100 pt-3">
                            Problems trying to resolve the conflict between <br />
                            the two major realms of Classical physics: Newtonian
                            mechanics
                        </p> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-fluid partners">
            <div class="container px-0">
                <div class="slick-slider-partners">
                    @foreach ($brands as $brand)
                        <div class="items d-flex justify-content-center align-items-center partners-logos">
                            <img class="img-fluid"
                                src="{{ !empty($brand->logo) ? url('storage/' . $brand->logo) : 'https://ui-avatars.com/api/?name=Default' }}"
                                alt="" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    @push('scripts')


        <script>
            $(document).ready(function() {
                $('#serviceSearch').on('keyup', function() {
                    var query = $(this).val();
                    $.ajax({
                        url: "{{ route('brands.search.name') }}",
                        method: 'GET',
                        data: {
                            query: query
                        },
                        success: function(data) {
                            $('#servicesContainer').html(data);
                        }
                    });
                });
            });
        </script>
    @endpush
</x-frontend-app-layout>
