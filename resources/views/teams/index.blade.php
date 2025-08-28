@extends('layouts.app')

@section('title', 'チーム一覧')

@section('content')
    <h1 class="mb-4">チーム一覧</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($teams as $team)
            <div class="col">
                <div class="card h-100 shadow-sm border-primary">
                    <h3>
                        <a href="{{ route('teams.show', $team->id) }}">
                            {{ $team->team_name }}
                        </a>
                    </h3>
                    <img src="{{ config('app.logo_image_path') }}/{{ $team->logo_filename }}" alt="{{ $team->team_name }}のロゴ">
                </div>
            </div>
        @endforeach
    </div>
@endsection