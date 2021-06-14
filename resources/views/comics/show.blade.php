@extends('layouts.main')

@section('content')
    <section class="show-main container">
        <h1 class="show-title">{{$comic->title}}</h1>
        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
        <h3>Serie: {{$comic->series}}</h3>
        <h3>Sale Date: {{$comic->sale_date}}</h3>
        <h2>€{{$comic->price}}</h2>
        <p class="description">{{ $comic->description }}</p>

        <a href="{{route('comics.index')}}"><strong>&#8656; Back to Archive</strong></a>
    </section>
@endsection