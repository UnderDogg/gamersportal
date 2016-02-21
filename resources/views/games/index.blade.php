<html>
<head>
    <title>{{ config('blog.title') }}</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>{{ config('games.title') }}</h1>
    <h5>Page {{ $games->currentPage() }} of {{ $games->lastPage() }}</h5>
    <hr>
    <ul>
        @foreach ($games as $game)
            <li>
                <a href="/game/{{ $game->slug }}">{{ $game->gamename }}</a>
                <em>({{ $game->updated_at->format('M jS Y g:ia') }})</em>

                <p>
                    {{ str_limit($game->slug) }}
                </p>
            </li>
        @endforeach
    </ul>
    <hr>
    {!! $games->render() !!}
</div>
</body>
</html>