@extends('layouts.main')

@section('content')
    <section>
        <h1>COMICS</h1>

        <table>
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
                            <a href="{{ route('comics.show', $comic->id) }}">
                                {{$comic->title}}
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
@endsection