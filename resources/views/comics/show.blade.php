@extends('layouts.main')

@section('content')
    <section>
        <h1>{{$comic->title}}</h1>
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        <h3>Serie: {{$comic->series}}</h3>
        <h3>Sale Date: {{$comic->sale_date}}</h3>
        <h2>€{{$comic->price}}</h2>
        <p>{{ $comic->description }}</p>

        <a href="{{route('comics.index')}}">Back to Archive</a>
    </section>
@endsection