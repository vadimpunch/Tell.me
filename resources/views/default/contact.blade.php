@extends('default.layouts.layout')


{{--{{print_r(Session::all())}}--}}
@section('content')

    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
            </ul>
        </div>
        @endif
    <form action="/contact/" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" value="{{old('name')}}" name='name'class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">
            <input type="text" value="{{old('email')}}" name='email' class="form-control"  aria-describedby="emailHelp" placeholder="Enter email">
            <input type="text" value="{{old('text')}}" name='text' class="form-control"  aria-describedby="emailHelp" placeholder="Enter text">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="pass" value="{{old('pass')}}" id="exampleInputPassword1" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection