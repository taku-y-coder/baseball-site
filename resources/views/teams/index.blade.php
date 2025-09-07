@extends('layouts.app')

@section('title', 'チーム一覧')

@section('content')
<h1 class="mb-4 text-center">チーム一覧</h1>

<div class="row">
    @foreach ($leagues as $key => $league)
        <div class="col-12 col-md-6">
            <h2 class="text-center">{{ $league }}</h2>
            @foreach ($teams->where('league', $key) as $team)
                <div class="col">
                    <div class="card m-4 h-100 shadow-sm border-1">
                        <h3 class="text-center">
                            {{ $team->name }}
                        </h3>
                        <div class="card-header text-center">
                            <img src="{{ config('app.logo_image_path') }}/{{ $team->logo_filename }}" alt="{{ $team->name }}のロゴ" class="img-fluid" style="max-height: 100px;">
                        </div>
                        <div class="card-body text-center">
                            <p class="card-text">創設：{{ $team->founded_at_formatted }}</p>
                            @foreach ($team->stadiums as $studium)
                                <p class="card-text">
                                    本拠地：
                                    <a href="{{ route('teams.stadium', $team->id) }}">
                                        {{ $studium->name }}
                                    </a>
                                </p>
                            @endforeach
                            <p class="card-text">
                                <a href="{{ route('teams.player', $team->id) }}">
                                    所属選手
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>

@endsection