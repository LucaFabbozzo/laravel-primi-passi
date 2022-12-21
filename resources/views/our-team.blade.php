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
    <title>Our Team</title>
</head>
<body>
    <div class="container">
        <h1>Our Team</h1>
        @foreach ($team as $member)
            <div class="box">
                <h3>{{$member['name']}}</h3>
                <h4>{{$member['surname']}}</h4>
                <h5>{{$member['email']}}</h5>
            </div>
        @endforeach
        <a href="/">Home</a>
    </div>
</body>
</html>
