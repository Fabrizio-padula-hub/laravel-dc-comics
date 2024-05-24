@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$comic->title}}</h1>
        <img src="{{ $comic->thumb }}" alt="{{$comic->title}}">

        <h5>{{$comic->price}} $</h5>
        <span>Serie: {{$comic->series}}</span>
        <div>
            Descrizione:
            {{$comic->description}}
        </div>


    </div>
@endsection