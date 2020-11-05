@extends('layouts.app')

@section('content')
<style>
    #mapid { height: 100%; }
</style>
<div id="mapid"></div>



@endsection
@section('script')
    <script>
        var mymap = L.map('mapid').setView([17.607789, 8.081666], 14);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'sk.eyJ1Ijoic2luZGlzc2FrYSIsImEiOiJja2Z5NGJsY2QyMWxuMnNwZGZlZGlkOGU3In0.Xqt5ZtNGjnxMx2URdmU67g'
    }).addTo(mymap);
    var circle = L.circle([13.521389, 2.105278], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
    radius: 500
}).addTo(mymap);
    </script>
@endsection