@extends('layouts/app')

@section('title' , 'Main Page')

{{-- work only one section by one name --}}
{{-- @section("content" , 'some value') --}} 
@section("content")


   <h1 class="text-center">This is home page</h1>

    @guest()
        @include('subviews.need-login')
    @endguest

@endsection


