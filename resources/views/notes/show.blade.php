@extends('layout.layout')
@section('content')
    <h1>{{$note->title}}</h1>

    <p>{{$note->body}}</p>

    <div class="text-center mt-5">
        <a class="btn btn-primary" href="/">Back</a>
        <a class="btn btn-primary" href="/notes/{{$note->id}}/edit">Edit</a>
    </div>
@endsection