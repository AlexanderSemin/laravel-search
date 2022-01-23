@extends('layouts/app')

@section('title' , 'Form page')

@section("content")

    @auth
        @include('subviews.form')
    @else
        @include('subviews.need-login')
    @endguest

@endsection


