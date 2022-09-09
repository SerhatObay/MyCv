@extends('backend.layouts.app')
@section('title')
İş Tecrübeleri
@endsection
@section('content')
    <div class="page-header">
        <h3 class="page-title">Deneyim Bilgileri Listesi</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Admin Panel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Deneyim Bilgileri Listesi</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{route('admin.experience.add')}}"class="btn btn-primary btn-block">Yeni Deneyim Ekle</a>
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
                                <th>Çalışma Tarihi</th>
                                <th>Pozisyyon</th>
                                <th>Şirket Adı</th>
                                <th>Açıklama</th>
                                <th>Status</th>
                                <th>Active</th>
                                <th>Eklenme Tarihi</th>
                                <th>Güncellenme Tarihi</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($list as $item)
                                    <tr id="{{$item->id}}">
                                        <td>{{$item->id}}</td>
                                        <td><a  href="{{ route('admin.experience.add',['experienceID'=>$item->id]) }}" class="btn btn-warning editExperience">Düzenle <i class="fa fa-edit"></i></a></td>
                                        <td><a data-id="{{$item->id}}" href="javascript:void(0)" class="btn btn-danger deleteExperience">Sil <i class="fa fa-trash"></i></a></td>

                                        <td>{{$item->date}}</td>
                                        <td>{{$item->task_name}}</td>
                                        <td>{{$item->company_name}}</td>
                                        <td>{{$item->description}}</td>
                                        <td>
                                            @if($item->status)
                                                <a data-id="{{$item->id}}" href="javascript:void(0)"  class="btn btn-success changeExperienceStatus" >Aktif</a>
                                            @else
                                                <a data-id="{{$item->id}}" href="javascript:void(0)" class="btn btn-danger changeExperienceStatus" >Pasif</a>
                                            @endif

                                        </td>
                                        <td>
                                            @if($item->active)
                                                <a data-id="{{$item->id}}" href="javascript:void(0)"  class="btn btn-success changeActive" >Aktif</a>
                                            @else
                                                <a data-id="{{$item->id}}" href="javascript:void(0)" class="btn btn-danger changeActive" >Pasif</a>
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
