<!DOCTYPE html>
<html>
<head>
    <title>Offer Expired</title>
</head>
<body>
    <h1>Offer Expired</h1>
    <p>The offer titled "{{ $offer->name }}" has expired.</p>
    <p>Details:</p>
    <ul>
        <li>Price: {{ $offer->price }}</li>
        <li>Offer Price: {{ $offer->offer_price }}</li>
        <li>Expiry Date: {{ $offer->expiry_date }}</li>
    </ul>
</body>
</html>
