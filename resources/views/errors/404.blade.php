@extends('layouts.main')

@section('content')
    <section class="error-404">
        <div class="error-title">
            <h1>404</h1>
            <h2>{{$exception->getMessage()}}</h2>
        </div>
        <h3>Oh no!!! Something wrong....the page you request does not exist.</h3>
        <a href="{{route('comics.index')}}"><strong>&#8656; Back to Archive</strong></a>
    </section>
@endsection