@extends('layouts.master')

@section('title', 'チーム一覧')

@section('content')
<h1 class="text-2xl font-semibold text-center mb-6">チーム一覧</h1>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
    @foreach ($leagues as $key => $league)
        <div class="px-2">
            <h2 class="text-center text-xl font-medium mb-4">{{ $league }}</h2>

            <div class="space-y-4">
                @foreach ($teams->where('league', $key) as $team)
                    @component('layouts.card')
                        <h3 class="text-lg font-semibold mb-3 text-center">
                            {{ $team->name }}
                        </h3>

                        <div class="mb-4 w-full flex justify-center">
                            <img
                                src="{{ config('app.logo_image_path') }}/{{ $team->logo_filename }}"
                                alt="{{ $team->name }}のロゴ"
                                class="h-24 object-contain"
                                style="max-height: 100px;"
                            >
                        </div>

                        <div class="w-full text-center space-y-2">
                            <p class="text-sm text-gray-600">創設：{{ $team->founded_at_formatted }}</p>

                            @foreach ($team->stadiums as $studium)
                                <p class="text-sm text-gray-600">
                                    本拠地：
                                    <a href="{{ route('stadiums.index', $team->id) }}" class="text-blue-600 hover:underline">
                                        {{ $studium->name }}
                                    </a>
                                </p>
                            @endforeach

                            <p>
                                <a href="{{ route('players.index', $team->id) }}" class="text-blue-600 hover:underline">
                                    所属選手
                                </a>
                            </p>
                        </div>
                    @endcomponent
                @endforeach
            </div>
        </div>
    @endforeach
</div>
@endsection