@extends('layouts/app')

@section('title' , 'Main Page')

{{-- work only one section by one name --}}
{{-- @section("content" , 'some value') --}} 
@section("content")

    @auth
        @include('subviews.form')
    @else
        <p class="text-center"> Please <a href="/login">LOGIN</a> or <a href="/register">REGISTER</a>.</p>
    @endguest

@endsection


