@extends('default.layouts.layout')


{{print_r(Session::all())}}
@section('content')
    <form action="{{route('contact', array('id'=>10))}}" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" value="{{old('email')}}" name='email'class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" name="pass" value="{{old('pass')}}" id="exampleInputPassword1" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection