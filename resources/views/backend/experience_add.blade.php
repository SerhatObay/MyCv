@extends('backend.layouts.app')
@php
    if ($experience)
        {
            $experienceText="Deneyim Düzenleme";

        }
        else
        {
            $experienceText="Yeni Deneyim Ekleme";
        }

@endphp
@section('title')
{{$experienceText}}
@endsection
@section('content')
    <div class="page-header">
        <h3 class="page-title">{{$experienceText}}</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Admin Panel</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.experience.list')}}">Deneyim Bilgileri Listesi</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$experienceText}}</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">


                    <form class="forms-sample" id="createExperienceForm" method="POST" action="">
                        @csrf
                        @if($experience)
                            <input type="hidden" name="educationID" value="{{$experience->id}}">
                        @endif
                        <div class="form-group">
                            <label for="date">Çalışma Tarihi</label>
                            <input type="text" class="form-control" name="date" id="date"
                                   placeholder="Çalışma Tarihi" value="{{$experience ? $experience->date : ''}}">
                            <small style="color: #97282c">Örneğin: 2020 - 2024</small>
                            @error('date')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="task_name">Çalışılan Pozisyon</label>
                            <input type="text" class="form-control" name="task_name" id="task_name"
                                   placeholder="Çalışılan Pozisyon" value="{{$experience ? $experience->task_name : ''}}">
                            @error('task_name')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="company_name">Şirket</label>
                            <input type="text" class="form-control" name="company_name" id="company_name"
                                   placeholder="Şirket" value="{{$experience ? $experience->company_name : ''}}">
                            @error('company_name')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description">Açıklama</label>
                            <textarea class="form-control"  name="description" id="description" cols="30"
                                      rows="7" placeholder="Açıklama"> {{$experience ? $experience->description : ''}}</textarea>
                        </div>

                        <div class="form-group">
                            <div class="form-check form-check-success">
                                <label class="form-check-label" for="status">
                                    <?php
                                    if ($experience)
                                        {
                                            $checkedStatus=$experience->status ? "checked" : '';
                                        }
                                    else
                                        {
                                            $checkedStatus='';
                                        }
                                    ?>

                                    <input type="checkbox" name="status" id="status" class="form-check-input "{{$checkedStatus}} >
                                    Deneyim Gösterilme Durumu
                                </label>


                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-check form-check-success">
                                <label class="form-check-label" for="active">
                                    <?php
                                    if ($experience)
                                    {
                                        $checkedActive=$experience->active ? "checked" : '';
                                    }
                                    else
                                    {
                                        $checkedActive='';
                                    }
                                    ?>

                                    <input type="checkbox" name="active" id="active" class="form-check-input "{{$checkedActive}} >
                                    Çalışma Durumu
                                </label>


                            </div>
                        </div>

                        <button  id="createExperienceButton" type="submit" class="btn btn-primary me-2" id="createExperienceButton">Kaydet</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
