@extends('layout.layout')
@section('content')
    <h1>Edit a Note</h1>

    <form method="POST" action="/notes/{{$note->id}}">
        @csrf

        <div class="form-group">
            <label for="title">Title</label><br/>
            <input type="text" name="title" class="form-control" id="title" value="{{$note->title}}"/>
        </div>

        <div class="form-group">
            <label for="body">Body</label><br/>
            <textarea name="body" class="form-control" id="body">{{$note->body}}</textarea>
        </div>
        <div class="row">
            <div class="col-6">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
            <div class="col-6 text-right">
                <form method="POST" action="/notes/{{$note->id}}/delete">
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>


        @if(count($errors))
            <div class="form-group mt-5">
                <div class="alert alert-danger" role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    </form>

    <br /><br />

    <div class="text-center mt-5">
        <a class="btn btn-primary" href="/">Back</a>
    </div>
@endsection