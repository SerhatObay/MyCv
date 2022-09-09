@extends('backend.layouts.app')
@php
    if ($education)
        {
            $educationText="Eğitim Düzenleme";

        }
        else
        {
            $educationText="Yeni Eğitim Ekleme";
        }

@endphp
@section('title')
{{$educationText}}
@endsection
@section('content')
    <div class="page-header">
        <h3 class="page-title">{{$educationText}}</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Admin Panel</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.education.list')}}">Eğitim Bilgileri Listesi</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$educationText}}</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">


                    <form class="forms-sample" id="createEducationForm" method="POST" action="">
                        @csrf
                        @if($education)
                            <input type="hidden" name="educationID" value="{{$education->id}}">
                        @endif
                        <div class="form-group">
                            <label for="education_date">Eğitim Tarihi</label>
                            <input type="text" class="form-control" name="education_date" id="education_date"
                                   placeholder="Eğitim Tarihi" value="{{$education ? $education->education_date : ''}}">
                            <small style="color: #97282c">Örneğin: 2020 - 2024</small>
                            @error('education_date')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="university_name">Üniversite Adı</label>
                            <input type="text" class="form-control" name="university_name" id="university_name"
                                   placeholder="Üniversite Adı" value="{{$education ? $education->university_name : ''}}">
                            @error('university_name')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="university_branch">Üniversite Bölümü</label>
                            <input type="text" class="form-control" name="university_branch" id="university_branch"
                                   placeholder="Üniversite Bölümü" value="{{$education ? $education->university_branch : ''}}">
                            @error('university_branch')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Açıklama</label>
                            <textarea class="form-control"  name="description" id="description" cols="30"
                                      rows="7" placeholder="Açıklama"> {{$education ? $education->description : ''}}</textarea>
                        </div>

                        <div class="form-group">
                            <div class="form-check form-check-success">
                                <label class="form-check-label" for="status">
                                    <?php
                                    if ($education)
                                        {
                                            $checkedStatus=$education->status ? "checked" : '';
                                        }
                                    else
                                        {
                                            $checkedStatus='';
                                        }
                                    ?>

                                    <input type="checkbox" name="status" id="status" class="form-check-input "{{$checkedStatus}} >
                                    Eğitim Gösterilme Durumu
                                </label>


                            </div>
                        </div>

                        <button  id="createButton" type="button" class="btn btn-primary me-2" id="createButton">Kaydet</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


