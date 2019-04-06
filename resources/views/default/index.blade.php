@extends('default.layouts.layout')

@section('navbar')
    @parent
@endsection

@section('header')
    @parent
@endsection

@section('firstcard')
   @parent
@endsection

@section('secondcard')
    <h4>Меня переопердолили</h4>
@endsection


@section('content')
    @include('default.content')
@endsection

