@foreach ($offers as $offer)
    <div class="offer">
        <h3>{{ $offer->name }}</h3>
        <p>{{ $offer->short_description }}</p>
        <a href="{{ $offer->url }}" target="_blank">View Offer</a>
    </div>
@endforeach
