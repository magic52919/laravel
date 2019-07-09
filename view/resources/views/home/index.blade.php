@extends('layout.master')

@section('head')
    <style>
        .fail {
            color: red;
        }
    </style>    
@endsection

@section('content')
    <h1>Home Index</h1>
    <p>Hello! {{ $userName }}</p>
    <div>{!! $lines !!}</div>
    <ul>
    @foreach ($scoreList as $score)
        <li class="{{ ($score < 60) ? 'fail' : '' }}">
            {{$score}}
        </li>
    @endforeach
    </ul>

    <select name="city" id="city">
        <option value="2" {{ ($cityId == 2) ? 'selected' : '' }}>台北</option>
        <option value="4" {{ ($cityId == 4) ? 'selected' : '' }}>台中</option>
        <option value="6" {{ ($cityId == 6) ? 'selected' : '' }}>台南</option>
    </select>

@endsection

{{-- <!DOCTYPE html>
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
        @foreach ($scoreList1 as $score)
        @foreach ($score as $scores => $b) 
        {{-- <li style="color:{{($score < 55) ?'red':''}}">{{$score}}</li> --}}
        {{-- {{$scores}}
        {{$b}}
        @endforeach
        @endforeach
    </ul>
    <div>@{{123}}</div> 
<hr>
    <select name="city" id="city">
        <option value="2">台北</option>
        <option value="4" selected>台中</option>
        <option value="6">台南</option>
    </select>
</body> --}}
{{-- </html>     --}} 