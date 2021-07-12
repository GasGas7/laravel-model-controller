<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Get From DB controller-model</title>
</head>

<body>
    <div class="container-fluid p-0">
        <h1 class="text-center">Movies</h1>
        <div class="row p-0">
            <div class="films p-0 d-flex flex-wrap offset-1">
                @foreach ($movies as $movie)
                    <div class="film col-4 offset-1 mt-3 mb-3 p-2  text-center">
                        <h3 class="mt-2">{{ $movie->title }}</h3>
                        <h5>Original-title: {{$movie->original_title}}</h5>
                        <p>Nationality: {{$movie->nationality}}</p>
                        <p>Date: {{$movie->date}}</p>
                        <p>Rate: {{$movie->vote}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
