@extends('layouts/app')

@section('title' , 'Main Page')

{{-- work only one section by one name --}}
{{-- @section("content" , 'some value') --}} 
@section("content")

    @auth
        @include('subviews.form')
    @else
        @include('subviews.need-login')
    @endguest

@endsection


