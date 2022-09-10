@extends('backend.layouts.app')
@section('title')
    Mesajlar
@endsection
@section('content')
    <div class="page-header">
        <h3 class="page-title">Gelen Mesajlar</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Admin Panel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gelen Mesajlar</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4">

                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Sil</th>
                                <th>Mesajı Gönderen</th>
                                <th>Email Adresi</th>
                                <th>Mesaj</th>
                                <th>Status</th>
                                <th>Eklenme Tarihi</th>
                                <th>Güncellenme Tarihi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($list as $item)
                                <tr id="{{$item->id}}">
                                    <td>{{$item->id}}</td>
                                    <td><a data-id="{{$item->id}}" href="javascript:void(0)" class="btn btn-danger deleteMessages">Sil <i class="fa fa-trash"></i></a></td>

                                    <td>{{$item->name}}</td>
                                    <td>{{$item->mail}}</td>
                                    <td>{{$item->message}}</td>
                                    <td>
                                        @if($item->read)
                                            <a data-id="{{$item->id}}" href="javascript:void(0)"  class="btn btn-success changeRead" >Okundu</a>
                                        @else
                                            <a data-id="{{$item->id}}" href="javascript:void(0)" class="btn btn-danger changeRead" >Okunmadı</a>
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
