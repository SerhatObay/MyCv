@extends('backend.layouts.app')
@php
    if ($post)
        {
            $postText="Paylaşım Düzenleme";

        }
        else
        {
            $postText="Yeni Paylaşım Ekleme";
        }

@endphp
@section('title')
    Paylaşım Ekleme
@endsection
@section('content')

    <div class="page-header">
        <h3 class="page-title">{{$postText}}</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Admin Panel</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.post.list')}}">Eğitim Bilgileri Listesi</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$postText}}</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">


                    <form class="forms-sample" id="createPostForm" method="POST" action="{{route('admin.post.add')}}" enctype="multipart/form-data">
                        @csrf
                        @if($post)
                            <input type="hidden" name="postID" value="{{$post->id}}">
                        @endif
                        <div class="form-group">
                            <label for="title">Paylaşım Başlığı</label>
                            <input type="text" class="form-control" name="title" id="title"
                                   placeholder="Paylaşım Başlığı" value="{{$post ? $post->title : ''}}">

                            @error('title')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="image">Paylaşım Resmi</label>
                            <input type="file" class="form-control" name="image" id="image" required >
                            @error('image')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror


                        </div>





                        <div class="form-group">
                            <label for="description">Açıklama</label>
                            <textarea class="form-control"  name="description" id="description" cols="30"
                                      rows="7" placeholder="Açıklama"> {{$post ? $post->description : ''}}</textarea>
                            @error('description')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>



                        <button  id="createPostButton" type="submit" class="btn btn-primary me-2" id="createPostButton">Kaydet</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
