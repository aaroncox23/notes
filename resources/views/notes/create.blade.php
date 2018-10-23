@extends('layout.layout')
@section('content')
    <h1>Create a New Note</h1>

    <form method="POST" action="/notes">
        @csrf

        <div class="form-group">
            <label for="title">Title</label><br/>
            <input type="text" name="title" class="form-control" id="title"/>
        </div>

        <div class="form-group">
            <label for="body">Body</label><br/>
            <textarea name="body" class="form-control" id="body"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>


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

    <br/><br/>

    <div class="text-center mt-5">
        <a class="btn btn-primary" href="/">Back</a>
    </div>
@endsection