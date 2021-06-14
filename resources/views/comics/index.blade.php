@extends('layouts.main')

@section('content')
    <section class="comics-main container flex ai-center jc-center">
            <h1 class="comics-title">COMICS</h1>
            <table class="comics-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <td>{{$comic->id}}</td>
                            <td>
                                <a href="{{ route('comics.show', $comic->slug) }}">
                                    {{$comic->title}}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </section>
@endsection