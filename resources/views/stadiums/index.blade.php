@extends('layouts.app')

@section('title', $team->name, '本拠地')

@section('content')

@foreach ($stadiums as $stadium)
    <h2 class="mb-4">{{ $stadium->name }}</h2>
    <div class="row-2">
        <div class="col-md-4">
            <div class="card shadow-sm rounded-3 p-3 mb-4" style="background: linear-gradient(135deg, #f8f9fa, #e9ecef)">
                <div class="card body text-center">
                    <p class="card-text">所在地：{{ $stadium->address }}</p>
                    <p class="card-text">開場年月：{{ $stadium->opened_at_formatted }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <img src="{{ asset('images/teams/stadium_'. $stadium->team_id . 'jpg' ) }}" alt="{{ $stadium->name.'の写真' }}" onerror="this.src='{{ asset('images/dummy/dummy_stadium.jpg' ) }}'">
        </div>
    </div>
@endforeach

@endsection