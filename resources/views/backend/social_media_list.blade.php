@extends('backend.layouts.app')

@section('title')
    Sosyal Medya Listesi
@endsection
@section('content')
    <div class="page-header">
        <h3 class="page-title">Sosyal Medya Listesi</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Admin Panel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sosyal Medya Listesi</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{route('admin.socialMedia.add')}}"class="btn btn-primary btn-block">Yeni Sosyal Medya Ekle</a>
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
                                <th>Ad</th>
                                <th>Link</th>
                                <th>Icon</th>
                                <th>Status</th>
                                <th>Eklenme Tarihi</th>
                                <th>Güncellenme Tarihi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $item)
                                <tr id="{{$item->id}}">
                                    <td>{{$item->id}}</td>
                                    <td><a  href="{{ route('admin.socialMedia.add',['socialMediaID'=>$item->id]) }}" class="btn btn-warning editEducation">Düzenle <i class="fa fa-edit"></i></a></td>
                                    <td><a data-id="{{$item->id}}" href="javascript:void(0)" class="btn btn-danger deleteSocialMedia">Sil <i class="fa fa-trash"></i></a></td>

                                    <td>{{$item->name}}</td>
                                    <td>{{$item->link}}</td>
                                    <td>{!! $item->icon !!}</td>
                                    <td>
                                        @if($item->status)
                                            <a data-id="{{$item->id}}" href="javascript:void(0)"  class="btn btn-success changeSocialMediaStatus" >Aktif</a>
                                        @else
                                            <a data-id="{{$item->id}}" href="javascript:void(0)" class="btn btn-danger changeSocialMediaStatus" >Pasif</a>
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
