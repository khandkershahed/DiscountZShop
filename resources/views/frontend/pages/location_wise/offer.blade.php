{{-- resources/views/offers/index.blade.php --}}

<div class="container">
    <h1>Offers in Area: {{ $areaId }}</h1>

    @if ($offers->isEmpty())
        <p>No offers available for this area.</p>
    @else
        <div class="offers-list">
            @foreach ($offers as $offer)
            @endforeach
        </div>
    @endif
</div>
