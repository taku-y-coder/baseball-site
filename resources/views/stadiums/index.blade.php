@extends('layouts.master')

@section('title', $team->name . ' 本拠地')

@section('header')
    <h1 class="text-2xl font-semibold text-center">{{ $team->name }} 本拠地</h1>
@endsection

@section('content')
<div class="space-y-8">
    @foreach ($stadiums as $stadium)
        <section class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
            <div>
                <h2 class="text-xl font-semibold mb-3">{{ $stadium->name }}</h2>

                <div class="bg-gradient-to-br from-gray-100 to-gray-200 rounded-lg shadow p-4">
                    <div class="text-center space-y-2">
                        <p class="text-sm text-gray-700">所在地：{{ $stadium->address }}</p>
                        <p class="text-sm text-gray-700">開場年月：{{ $stadium->opened_at_formatted }}</p>
                    </div>
                </div>
            </div>

            <div class="flex justify-center">
                <img
                    src="{{ asset('images/teams/stadium_' . $stadium->team_id . '.jpg') }}"
                    alt="{{ $stadium->name }}の写真"
                    onerror="this.onerror=null;this.src='{{ asset('images/dummy/dummy_stadium.jpg') }}';"
                    class="w-full max-w-md h-48 object-cover rounded-lg shadow-md"
                >
            </div>
        </section>
    @endforeach
</div>
@endsection