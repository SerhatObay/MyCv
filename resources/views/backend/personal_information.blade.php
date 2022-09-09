@extends('backend.layouts.app')

@section('title')
Kişisel Bilgiler
@endsection
@section('content')
    <div class="page-header">
        <h3 class="page-title">Kişisel Bilgiler</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Admin Panel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kişisel Bilgiler Düzenleme</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">


                    <form class="forms-sample" id="createEducationForm" method="POST" action="" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="main_title">Anasayfa Başlık</label>
                            <input type="text" class="form-control" name="main_title" id="main_title"
                                   placeholder="Anasayfa Başlık"
                                   value="{{$information->main_title}}">

                            @error('main_title')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="editor1">Hakkımda Yazısı</label>
                            <textarea name="about_text" id="editor1" cols="80" rows="10" data-sample="1" data-sample-short="">
                                {!! $information->about_text !!}
                            </textarea>

                        </div>

                        <div class="form-group">
                            <label for="btn_contact_text">Bana Ulaşın Butonu Yazısı</label>
                            <input type="text" class="form-control" name="btn_contact_text" id="btn_contact_text"
                                   placeholder="Bana Ulaşın Butonu Yazısı"
                                   value="{{$information->btn_contact_text}}">

                            @error('btn_contact_text')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="btn_contact_link">Bana Ulaşın Butonu Linki </label>
                            <input type="text" class="form-control" name="btn_contact_link" id="btn_contact_link"
                                   placeholder="Bana Ulaşın Butonu Linki"
                                   value="{{$information->btn_contact_link}}">

                            @error('btn_contact_link')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="small_title_left">Eğitim Başlığı Üzerindeki Ufak Başlık</label>
                            <input type="text" class="form-control" name="small_title_left" id="small_title_left"
                                   placeholder="Eğitim Başlığı Üzerindeki Ufak Başlık"
                                   value="{{$information->small_title_left}}">

                            @error('small_title_left')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="title_left">Eğitim Başlığı </label>
                            <input type="text" class="form-control" name="title_left" id="title_left"
                                   placeholder="Eğitim Başlığı "
                                   value="{{$information->title_left}}">

                            @error('title_left')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="small_title_right">Deneyim Başlığı Üzerindeki Ufak Başlık</label>
                            <input type="text" class="form-control" name="small_title_right" id="small_title_right"
                                   placeholder="Deneyim Başlığı Üzerindeki Ufak Başlık"
                                   value="{{$information->small_title_right}}">

                            @error('small_title_right')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="title_right">Deneyim Başlığı </label>
                            <input type="text" class="form-control" name="title_right" id="title_right"
                                   placeholder="Deneyim Başlığı "
                                   value="{{$information->title_right}}">

                            @error('title_right')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="full_name">Ad Soyad</label>
                            <input type="text" class="form-control" name="full_name" id="full_name"
                                   placeholder="Ad Soyad"
                                   value="{{$information->full_name}}">

                            @error('full_name')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="image">Resim</label>
                                    <input type="file" class="form-control" name="image" id="image">


                                    @error('image')
                                    <div class="alert alert-danger">{{$message}}</div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <img width="100"
                                         src="{{asset($information->image )}}" >
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="task_name">Pozisyon</label>
                            <input type="text" class="form-control" name="task_name" id="task_name"
                                   placeholder="Pozisyon"
                                   value="{{$information->task_name}}">

                            @error('task_name')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="birthday">Doğum Tarihi</label>
                            <input type="text" class="form-control" name="birthday" id="birthday"
                                   placeholder="Doğum Tarihi"
                                   value="{{$information->birthday}}">

                            @error('birthday')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="website">WebSite</label>
                            <input type="text" class="form-control" name="website" id="website"
                                   placeholder="WebSite"
                                   value="{{$information->website}}">

                            @error('website')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="phone">Telefon Numarası</label>
                            <input type="text" class="form-control" name="phone" id="phone"
                                   placeholder="Telefon Numarası"
                                   value="{{$information->phone}}">

                            @error('phone')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="mail">Mail Adresi</label>
                            <input type="text" class="form-control" name="mail" id="mail"
                                   placeholder="Mail Adresi"
                                   value="{{$information->mail}}">

                            @error('mail')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="address">Adres</label>
                            <input type="text" class="form-control" name="address" id="address"
                                   placeholder="Adres"
                                   value="{{$information->address}}">

                            @error('address')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="cv">Özgeçmiş</label>
                            <input type="file" class="form-control" name="cv" id="cv">

                            @error('cv')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="editorLang">Diller</label>
                            <textarea name="lang" id="editorLang" cols="80" rows="10" data-sample="1" data-sample-short="">
                                {!! $information->languages !!}
                            </textarea>

                        </div>

                        <div class="form-group">
                            <label for="editorInterests">İlgi Alanları</label>
                            <textarea name="interests" id="editorInterests" cols="80" rows="10" data-sample="1" data-sample-short="">
                                {!! $information->interests !!}
                            </textarea>

                        </div>


                        <button   type="submit" class="btn btn-primary me-2" id="personalCreate">Kaydet</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


