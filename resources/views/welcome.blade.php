<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container py-5">
        <div class="row py-5">
            @foreach ($movies as $movie)
            <div class="col-4 text-center py-4">
                <ul>
                    <div>
                        <div class="card">
                            <li class="movie-title">Title: {{ $movie->original_title }}</li>
                            <li class="movie-origin">Origin:{{ $movie->nationality }}</li>
                            <li class="movie-date">Date: {{ $movie->date }}</li>
                            <li class="movie-vote">Vote: {{ $movie->vote }}</li>
                        </div>
                    </div>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>