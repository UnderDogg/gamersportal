<html>
<head>
    <title>{{ $game->title }}</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body>
<div class="container">
    <h1>{{ $game->gamename }}</h1>
    <h5>{{ $game->updated_at->format('M jS Y g:ia') }}</h5>
    <hr>
    {!! nl2br(e($game->gamename)) !!}
    <hr>
    <button class="btn btn-primary" onclick="history.go(-1)">
        « Back
    </button>
</div>
</body>
</html>