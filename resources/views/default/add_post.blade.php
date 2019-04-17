@extends('default.layouts.layout')

@section('firstCard')
@endsection

@section('thirdcard')
@endsection


@if(count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
@endif

<form action="{{route('admin_add_post_p')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" value="{{old('name')}}" id="title" name='name' class="form-control"
               placeholder="Enter name">
        <label for="img">Img</label>
        <input type="text" value="{{old('img')}}" name='img' id="img" class="form-control"
               placeholder="Img">
        <label for="text">Text</label>
        <input type="text" value="{{old('text')}}" name='text' id="text" class="form-control"
               placeholder="Text">
        <small id="emailHelp" class="form-text text-muted">Create new post</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>