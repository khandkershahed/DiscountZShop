@foreach ($division->cities as $city)
    <li class="area-names" onclick="cityAreas($city->name)">{{ $city->name }}</li>
@endforeach
