@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($trains as $train)
            <h4>{{ $train->company }}</h4>
            <div class="trains-info d-flex">
                <p>{{ $train->departure_station }} -</p>
                <p>{{ $train->arrival_station }}</p>
                <p>{{ $train->departure_time }}</p>
                <p>{{ $train->arrival_time }}</p>
                <p>{{ $train->train_code }}</p>
            </div>
        @endforeach
    </div>
@endsection
