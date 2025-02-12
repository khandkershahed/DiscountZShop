{{-- Mobile Store Start --}}
<div class="row">

    @foreach ($mobile_brands as $mobile_brand)
        <div class="col-3 mb-3">

            <a href="{{ route('brand.details', $mobile_brand->slug) }}" class="">

                <div class="">

                    <img class="img-fluid rounded-0"
                        src="{{ asset('storage/' . $mobile_brand->image) }}"
                        alt="arong-logo.png" />
                </div>

                <p class="category-title mt-2">{{ $mobile_brand->name }}</p>

            </a>

        </div>
    @endforeach


</div>
{{-- Mobile Store End --}}
