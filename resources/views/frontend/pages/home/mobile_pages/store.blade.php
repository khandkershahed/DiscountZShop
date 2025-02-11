{{-- Mobile Store Start --}}
<div class="row">

    @foreach ($mobile_stores as $mobile_store)
        <div class="col-3 mb-3">

            <a href="{{ route('vendor.stores', optional($mobile_store->brand)->slug ?? '') }}" class="">

                <div class="">

                    <img class="img-fluid"
                        src="{{ !empty(optional($mobile_store->brand)->logo) ? url('storage/' . optional($mobile_store->brand)->logo) : asset('images/no-image(random).png') }}"
                        alt="arong-logo.png" />
                </div>

                <p class="category-title">{{ $mobile_store->title }}</p>

            </a>

        </div>
    @endforeach


</div>
{{-- Mobile Store End --}}
