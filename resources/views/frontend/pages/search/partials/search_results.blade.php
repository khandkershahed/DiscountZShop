<div class="search-results">

    @if ($brands->count() > 0)
        <h5>Brands</h5>
        <ul>
            @foreach ($brands as $brand)
                <li>{{ $brand->name }}</li>
            @endforeach
        </ul>
    @endif

    @if ($offers->count() > 0)
        <h5>Offers</h5>
        <ul>
            @foreach ($offers as $offer)
                <li>{{ $offer->name }}</li>
            @endforeach
        </ul>
    @endif

    @if ($stores->count() > 0)
        <h5>Stores</h5>
        <ul>
            @foreach ($stores as $store)
                <li>{{ $store->title }}</li>
            @endforeach
        </ul>
    @endif

    @if ($brands->isEmpty() && $offers->isEmpty() && $stores->isEmpty())
        <p>No results found.</p>
    @endif
</div>
