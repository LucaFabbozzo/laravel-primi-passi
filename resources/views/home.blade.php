<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>laravel-primi-passi</title>
</head>
<body>
    <div class="container">
        <img src="{{asset('img/laravel_logo.png')}}" alt="">
        <h1>{{$hello}}</h1>
        <nav>
            <ul>
                @foreach ($routes as $route)
                 <li><a href="/{{$route['name']}}">{{$route['text']}}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
</body>
</html>
