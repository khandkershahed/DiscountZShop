<div class="offers">
    @foreach($offers as $offer)
        <div class="offer">
            <h3>{{ $offer->name }}</h3>
            <img src="{{ $offer->image }}" alt="{{ $offer->name }}">
            <p>{{ $offer->short_description }}</p>
            <a href="{{ $offer->url }}" class="btn">View Offer</a>
        </div>
    @endforeach
</div>
