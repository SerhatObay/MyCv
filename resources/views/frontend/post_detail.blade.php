@extends('frontend.layouts.app')
@section('title')
    Blog
@endsection
@section('content')
    {{$post->title}}
    <img src="{{$post->image}}" width="400" height="400" >

    {!! $post->description !!}


@endsection
