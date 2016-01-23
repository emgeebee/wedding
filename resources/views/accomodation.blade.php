@extends('master')

@section('title', 'Menu')

@section('sidebar')
    @parent
@endsection

@section('content')
    <p>
        <span class="value">Here's a couple of nearby hotels:</span>
        <span class="value"><a href="https://www.oldenglishinns.co.uk/our-locations/the-white-hart-coggeshall">The White Hart, Coggleshall - 1.5 miles</a></span>
        <span class="value"><a href="https://www.bestwestern.co.uk/hotels/best-western-marks-tey-hotel-83881?utm_source=google_places&utm_medium=organic&utm_campaign=Best_Western_Marks_Tey_Hotel">The Best Western - 3.5 miles</a></span>
        <span class="value"><a href="http://www.theessexgolfandcountryclub.com/">The Essex Golf & Country Club - 5 miles</a></span>
        <span class="value"><a href="https://www.travelodge.co.uk/hotels/27/Colchester-Feering-hotel?utm_source=google&utm_medium=maps&utm_campaign=Colchester%20Feering">Travelodge - 6 miles</a></span>
    </p>
@endsection
