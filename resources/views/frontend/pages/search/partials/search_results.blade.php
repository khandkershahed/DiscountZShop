<div class="search-results">

    @if ($brands->count() > 0)
        <h5>Brands</h5>
        <ul>
            @foreach ($brands as $brand)
                <li><a href="{{ route('brand.details',$brand->slug) }}">{{ $brand->name }}</a></li>
            @endforeach
        </ul>
    @endif

    @if ($offers->count() > 0)
        <h5>Offers</h5>
        <ul>
            @foreach ($offers as $offer)
                <li><a href="{{ route('offer.details',$offer->slug) }}">{{ $offer->name }}</a></li>
            @endforeach
        </ul>
    @endif

    @if ($stores->count() > 0)
        <h5>Stores</h5>
        <ul>
            @foreach ($stores as $store)
                <li><a href="{{ route('vendor.stores', optional($store->brand)->slug) }}">{{ $store->title }}</a></li>
            @endforeach
        </ul>
    @endif

    @if ($brands->isEmpty() && $offers->isEmpty() && $stores->isEmpty())
        <p>No results found.</p>
    @endif
</div>
