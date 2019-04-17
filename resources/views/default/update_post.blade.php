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


{{--@can('update', $article)--}}
{{--    <div class="alert alert-success">--}}
{{--      Есть права--}}
{{--    </div>--}}
{{--@endcan--}}

@cannot('update', $article)
    <div class="alert alert-danger">
       Нет прав
    </div>
    @else
@endcannot

<form action="{{route('admin_update_post_p')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="title">Titlfore</label>
        <input type="text" value="{{$article->name}}" id="title" name='name' class="form-control"
               placeholder="Enter name">
        <label for="img">Img</label>
        <input type="text" value="{{$article->img}}" name='img' id="img" class="form-control"
               placeholder="Img">
        <label for="text">Text</label>
        <input type="text" value="{{$article->text}}" name='text' id="text" class="form-control"
               placeholder="Text">
        <input type="hidden" name="id" value="{{$article->id}}">
        <small id="emailHelp" class="form-text text-muted">Create new post</small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>