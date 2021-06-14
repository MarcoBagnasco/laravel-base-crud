@extends('layouts.main')

@section('content')
    <section>
        <h1>{{$exception->getMessage()}}</h1>
    </section>
@endsection