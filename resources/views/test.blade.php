<body class="antialiased">
    @auth
        @for ($i = 0; $i < 10; $i++)
            {{ $i }}
        @endfor
    @endauth