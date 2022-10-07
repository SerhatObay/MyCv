@extends('backend.layouts.app')

@section('title')
    Portfolio Yönetimi
@endsection
@section('content')
    <div class="page-header">
        <h3 class="page-title">Portfolio Yönetimi</h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Admin Panel</a></li>
                <li class="breadcrumb-item active" aria-current="page">Portfolio Yönetimi</li>
            </ol>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">


                    <form class="forms-sample" id="createPortfolioForm" method="POST"
                          action="{{route('portfolio.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="portfolioTitle">Başlık</label>
                            <input type="text" class="form-control" name="portfolioTitle" id="portfolioTitle"
                                   placeholder="Başlık"
                                   value="">

                            @error('portfolioTitle')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tags">Etiketler</label>
                            <input type="text" class="form-control" name="tags" id="tags"
                                   placeholder="Etiketler"
                                   value="">

                            @error('tags')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="about">Portfolio Hakkında</label>
                            <textarea name="about" id="about" cols="80" rows="10" data-sample="1" data-sample-short="">

                            </textarea>

                        </div>

                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="text" class="form-control" name="website" id="website"
                                   placeholder="Website"
                                   value="">

                            @error('website')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="keywords">Keywords</label>
                            <input type="text" class="form-control" name="keywords" id="keywords"
                                   placeholder="Keywords"
                                   value="">

                            @error('keywords')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="portfolioDescription">Açıklama</label>
                            <input type="text" class="form-control" name="portfolioDescription" id="portfolioDescription"
                                   placeholder="Açıklama"
                                   value="">

                            @error('portfolioDescription')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">

                            <label for="images">
                                Resimler
                            </label>
                            <br>
                            <input type="file" multiple name="images[]" id="images">
                            @error('images')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <div class="form-check form-check-success">
                                <label class="form-check-label" for="status">
                                    <input type="checkbox" name="status" id="status" class="form-check-input ">
                                    Portfolio Gösterilme Durumu
                                </label>


                            </div>
                        </div>


                        <button type="button" class="btn btn-primary me-2" id="portfolioCreate">Kaydet</button>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


