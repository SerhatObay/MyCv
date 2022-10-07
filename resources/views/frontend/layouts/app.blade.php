<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Mukta:300,400,500,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/vendors/@fortawesome/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/live-resume.css')}}">
    <link rel="stylesheet" href="{{asset('/assets/sweet-alert/sweetalertt2.min.css')}}">
</head>

<body>
<header>
    <button  class="btn btn-white btn-share ml-auto mr-3 ml-md-0 mr-md-auto"><img src="{{asset('assets/images/share.svg')}}" alt="share" class="btn-img">
        SHARE</button>
    <nav class="collapsible-nav" id="collapsible-nav">
        <a href="{{route('index')}}" class="nav-link {{Route::is('index') ? 'active' : ''}}">Anasayfa</a>
        <a href="{{route('resume')}}" class="nav-link {{Route::is('resume') ? 'active' : ''}}">Bilgiler</a>
        <a href="{{route('blog')}}" class="nav-link {{Route::is('blog') ? 'active' : ''}}" >Paylaşımlar</a>
        <a href="{{route('contact')}}" class="nav-link {{Route::is('contact') ? 'active' : ''}}">İletişim</a>
        <a href="{{route('portfolio')}}" class="nav-link {{Route::is('portfolio') ? 'active' : ''}}" >Portfolio</a>

    </nav>
    <button class="btn btn-menu-toggle btn-white rounded-circle" data-toggle="collapsible-nav "
            data-target="collapsible-nav"><img src="{{asset('assets/images/hamburger.svg')}}" alt="hamburger"></button>
</header>
<div class="content-wrapper">
    <aside>
        <div class="profile-img-wrapper">
            <img src="{{asset($personal->image)}}" alt="{{$personal->full_name}}">
        </div>
        <h1 class="profile-name">{{$personal->full_name}}</h1>
        <div class="text-center">
            <span class="badge badge-white badge-pill profile-designation">{{$personal->task_name}}</span>
        </div>
        <nav class="social-links">
            @foreach($social as $item)
            <a href="{{$item->link}}" target="_blank" class="social-link" title="{{$item->name}}">
                {!! $item->icon !!}
            </a>
            @endforeach
        </nav>
        <div class="widget">
            <h5 class="widget-title">Kişisel Bilgiler</h5>
            <div class="widget-content">
                <p>Doğum Günü : {{$personal->birthday}}</p>
                <p>Web Site : {{$personal->website}}</p>
                <p>Telefon : {{$personal->phone}}</p>
                <p>Mail : {{$personal->mail}}</p>
                <p>Adres : {{$personal->address}}</p>
                <a href="{{asset($personal->cv)}}" class="btn btn-download-cv btn-primary rounded-pill">
                    <img src="{{asset('assets/images/download.svg')}}"
                         alt="download"
                                                                                   class="btn-img">Cv İndir </a>
            </div>
        </div>
        <div class="widget card">
            <div class="card-body">
                <div class="widget-content">
                    <h5 class="widget-title card-title">Diller</h5>
                    {!! $personal->languages !!}
                </div>
            </div>
        </div>
        <div class="widget card">
            <div class="card-body">
                <div class="widget-content">
                    <h5 class="widget-title card-title">İlgi Alanları</h5>
                    {!! $personal->interests !!}
                </div>
            </div>
        </div>
    </aside>
    @yield('content')
</div>
<script src="{{asset('assets/vendors/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/vendors/@popperjs/core/dist/umd/popper-base.min.js')}}"></script>
<script src="{{asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/sweet-alert/sweetalert2.all.js')}}"></script>
<script src="{{asset('assets/js/live-resume.js')}}"></script>
@include('sweetalert::alert')

<script>
    $('#sendMessage').click(function ()
    {
        let name=document.querySelector('#name').value;
        let mail=document.querySelector('#mail').value;
        let message=document.querySelector('#message').value;

        if (name.trim() == '')
        {
            Swal.fire({
                icon: 'info',
                title: 'Uyarı...',
                text: 'İsminizi Yazmalısınız!',
                confirmButtonText:'Tamam',

            });

        }
        else if (!emailControl(mail))
        {
            Swal.fire({
                icon: 'info',
                title: 'Uyarı...',
                text: 'Geçerli Bir Email Adresi Yazmalısınız!',
                confirmButtonText:'Tamam',

            });
        }
        else if (mail.trim() == '')
        {


            Swal.fire({
                icon: 'info',
                title: 'Uyarı...',
                text: 'Email Adresinizi Yazmalısınız!',
                confirmButtonText:'Tamam',

            });
        }

        else if (message.trim() == '')
        {
            Swal.fire({
                icon: 'info',
                title: 'Uyarı...',
                text: 'Mesajınızı Yazmalısınız!',
                confirmButtonText:'Tamam',

            });
        }
        else {

            $('#sendMessageForm').submit();
        }
    });
    function emailControl(mail){
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(mail);
    }
</script>
</body>

</html>
