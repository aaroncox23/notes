@extends('layout.layout')
@section('content')
    <h1>List of All Notes</h1>
    <ul>
        @foreach($notes as $note)
            <li>
                <a href="/notes/{{$note->id}}">{{$note->title}}</a>
            </li>
        @endforeach
    </ul>
    <br/>
    <div class="text-center mt-5">
        <a class="btn btn-primary" href="/create">Create a New Note</a>
    </div>
@endsection