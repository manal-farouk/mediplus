@extends('layouts.main')

@section('content')
    @include('includes.breadcrumbs')
    @include('includes.contactUs')
@endsection

@section('addionalFooter')
    <!-- Google Map API Key JS -->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDGqTyqoPIvYxhn_Sa7ZrK5bENUWhpCo0w"></script>
    <!-- Map Active JS -->
    <script src="{{asset('assets/js/map-active.js') }}" ></script>
    <!-- Gmaps JS -->
    <script src="{{asset('assets/js/gmaps.min.js') }}"></script>
@endsection