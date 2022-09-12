@extends('backend.layouts.app')
@section('title')

@endsection
@section('content')
    <div style="background-color:white;color:white;padding:20px;">
        <h2 style="color: #0a0a0a">{{$message->name}}</h2>
        <h4 style="color: #0a0a0a">{{$message->mail}}</h4>
        <p style="color: #0a0a0a">{{$message->message}}</p>
    </div>
@endsection
