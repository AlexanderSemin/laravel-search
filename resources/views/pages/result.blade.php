@extends('layouts/app')

@section('title' , 'Search result')

@section("content")

    @auth
        @include('subviews.list-domains')
    @else
        @include('subviews.need-login')
    @endguest

@endsection

