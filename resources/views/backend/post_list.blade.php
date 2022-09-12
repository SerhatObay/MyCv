@extends('backend.layouts.app')
@section('title')
    Paylaşım Listesi
@endsection
@section('content')
    <style>
        .table th img, .jsgrid .jsgrid-table th img, .table td img, .jsgrid .jsgrid-table td img {
            width: 100px;
            height: unset !important;
            border-radius: unset !important;
        }
    </style>
    <div class="page-header">
        <h3 class="page-title">Paylaşımlar</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Admin Panel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Paylaşımlar</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{route('admin.post.add')}}"class="btn btn-primary btn-block">Yeni Paylaşım Ekle</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Düzenle</th>
                                <th>Sil</th>
                                <th>Paylaşım Resmi</th>
                                <th>Paylaşım Başlığı</th>
                                <th>Makale Yazısı</th>
                                <th>Status</th>
                                <th>Eklenme Tarihi</th>
                                <th>Güncellenme Tarihi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($post as $item)
                                <tr id="{{$item->id}}">
                                    <td>{{$item->id}}</td>
                                    <td><a  href="{{ route('admin.post.add',['postID'=>$item->id]) }}" class="btn btn-warning editPost">Düzenle <i class="fa fa-edit"></i></a></td>
                                    <td><a data-id="{{$item->id}}" href="javascript:void(0)" class="btn btn-danger deletePost">Sil <i class="fa fa-trash"></i></a></td>

                                    <td><img src="{{asset($item->image)}}" alt=""></td>
                                    <td>{{$item->title}}</td>
                                    <td>{!! Str::limit($item->description,50)  !!}</td>
                                    <td>
                                        @if($item->status)
                                            <a data-id="{{$item->id}}" href="javascript:void(0)"  class="btn btn-success changePostStatus" >Aktif</a>
                                        @else
                                            <a data-id="{{$item->id}}" href="javascript:void(0)" class="btn btn-danger changePostStatus" >Pasif</a>
                                        @endif

                                    </td>
                                    <td>{{\Carbon\Carbon::parse($item->created_at)->format("d-m-Y H:i:s")}}</td>
                                    <td>{{\Carbon\Carbon::parse($item->update_at)->format("d-m-Y H:i:s")}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
