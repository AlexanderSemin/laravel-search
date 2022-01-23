@extends('layouts/app')

@section('title' , 'Result Page')

@section("content")

    @auth
        @include('subviews.list-domains')
    @else
        @include('subviews.need-login')
    @endguest

@endsection

