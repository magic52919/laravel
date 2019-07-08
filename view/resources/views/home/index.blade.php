<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lab</title>
    <style>
        .fail {
            color: red;
        }
    </style>
</head>
<body>
    <h1>Home Index</h1>
    <p>Hello! {{ $userName }}</p>
    <div>{{ $lines }}</div>

    <div>{!! $lines !!}</div>

    <ul>
        @foreach ($scoreList as $score)
        @if ($score < 60)<li style="color:red">{{$score}}</li>
        @else <li>{{$score}}</li>
        @endif
        @endforeach
    </ul>
<div>@{{}}</div>
</body>
</html>    