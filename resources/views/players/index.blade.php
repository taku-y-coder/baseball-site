@extends('layouts.master')

@section('title', $team->name . ' 選手一覧')

@section('header')
    <h1 class="text-2xl font-semibold text-center">{{ $team->name }}の選手一覧</h1>
@endsection

@section('content')
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
    @foreach ($players as $player)
        <div>
            @component('layouts.card')
                <div class="w-full flex flex-col items-center">
                    <img
                        src="{{ asset('images/teams/' . $player->uniform_number . '.jpg') }}"
                        alt="{{ $player->name }}の写真"
                        onerror="this.onerror=null;this.src='{{ asset('images/dummy/dummy_player.jpg') }}';"
                        loading="lazy"
                        class="w-full h-48 object-cover rounded-md mb-4"
                    >

                    <div class="w-full text-center">
                        <h3 class="text-lg font-medium mb-1">{{ $player->name }}</h3>
                        <p class="text-sm text-gray-700">背番号：{{ $player->uniform_number }}</p>
                        <p class="text-sm text-gray-500">ポジション：{{ $player->position }}</p>
                        <p class="text-sm text-gray-500">身長：{{ $player->height }}cm</p>
                        <p class="text-sm text-gray-500">体重：{{ $player->weight }}kg</p>
                    </div>
                </div>
            @endcomponent
        </div>
    @endforeach
</div>
@endsection