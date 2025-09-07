@extends('layouts.app')

@section('title', $team->name, '選手一覧')

@section('content')
<h2 class="mb-4">{{ $team->name }}の選手一覧</h2>
<div class="row g-4">
    @foreach ($players as $player)
        <div class="col-12 col-sm-6 col-md-4">
            <div class="card h-100 stext-center">
            <img src="{{ asset('images/teams/' . $player->uniform_number . 'jpg' ) }}" alt="{{ $player->name.'の写真'}}" onerror="this.src='{{ asset('images/dummy/dummy_player.jpg' ) }}'">
                <div class="card-body">
                    <h5 class="card-title">{{ $player->name }}</h5>
                    <p class="card-text">背番号：{{ $player->uniform_number }}</p>
                    <p class="card-text text-muted">ポジション：{{ $player->position }}</p>
                    <p class="card-text text-muted">身長：{{ $player->height}}cm</p>
                    <p class="card-text text-muted">体重：{{ $player->weight }}kg</p>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection