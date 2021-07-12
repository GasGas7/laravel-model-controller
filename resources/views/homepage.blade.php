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
    <div class="container-xl">
        <h1 class="text-center">Movies from DATABASE</h1>
        <div class="row">
            <div class="films d-flex flex-wrap">
                @foreach ($movies as $movie)
                    <div class="film col-3">
                        <h4>Title: {{ $movie->title }}</h4>
                        <h6>Original-title: {{$movie->original_title}}</h6>
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
