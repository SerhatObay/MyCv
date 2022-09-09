@extends('backend.layouts.app')
@php
    if ($socialMedia)
        {
            $socialMediaText="Sosyal Medya Düzenleme";

        }
        else
        {
            $socialMediaText="Yeni Sosyal Medya Ekleme";
        }

@endphp

@section('title')
{{$socialMediaText}}
@endsection
@section('content')
    <div class="page-header">
        <h3 class="page-title">{{$socialMediaText}}</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Admin Panel</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.socialMedia.list')}}">Sosyal Medya Listesi</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$socialMediaText}}</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">


                    <form class="forms-sample" id="createExperienceForm" method="POST" action="">
                        @csrf
                        @if($socialMedia)
                            <input type="hidden" name="educationID" value="{{$socialMedia->id}}">
                        @endif
                        <div class="form-group">
                            <label for="date">Ad</label>
                            <input type="text" class="form-control" name="name" id="date"
                                   placeholder="Ad" value="{{$socialMedia ? $socialMedia->name : ''}}">
                            @error('name')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="link">Sosyal Medya Linki</label>
                            <input type="text" class="form-control" name="link" id="link"
                                   placeholder="Sosyal Medya Linki" value="{{$socialMedia ? $socialMedia->link : ''}}">
                            @error('link')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="icon">İcon</label>
                            <input type="text" class="form-control" name="icon" id="icon"
                                   placeholder="İcon" value="{{$socialMedia ? $socialMedia->icon : ''}}">
                            <small >
                                <a href="https://fontawesome.com/icons?d=gallery&s=brands" target="_blank">Icon Seçmek İçin</a>
                            </small>
                            @error('icon')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>



                        <div class="form-group">
                            <div class="form-check form-check-success">
                                <label class="form-check-label" for="status">
                                    <?php
                                    if ($socialMedia)
                                    {
                                        $checkedStatus=$socialMedia->status ? "checked" : '';
                                    }
                                    else
                                    {
                                        $checkedStatus='';
                                    }
                                    ?>

                                    <input type="checkbox" name="status" id="status" class="form-check-input "{{$checkedStatus}} >
                                    Anasayfada Gösterilme Durumu
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
