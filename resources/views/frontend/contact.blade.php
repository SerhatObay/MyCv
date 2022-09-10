@extends('frontend.layouts.app')
@section('title')
    İletişim
@endsection
@section('content')
    <main>
        <section class="contact-section">
            <h2 class="section-title">BENİMLE İLETİŞİME GEÇİN</h2>
            <p class="mb-4">Bir proje, iş veya başka bir şey hakkında konuşmak isterseniz, iletişime geçin.</p>

            <div class="contact-cards-wrapper">
                <div class="contact-card">
                    <h6 class="contact-card-title">Telefon Numaram</h6>
                    <p class="contact-card-content">{{$personal->phone}}</p>
                </div>
                <div class="contact-card">
                    <h6 class="contact-card-title">Mail Adresim</h6>
                    <p class="contact-card-content">{{$personal->mail}}</p>
                </div>
            </div>

            <form class="forms-sample" id="sendMessageForm" method="post" action="{{route('sendMessage')}}">
                @csrf
                <div class="form-group form-group-name">
                    <label for="name" class="sr-only">Name</label>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group form-group-email">
                    <label for="mail" class="sr-only">Email</label>
                    <input type="mail" name="mail" id="mail" class="form-control" placeholder="Mail">
                </div>
                <div class="form-group">
                    <label for="message" class="sr-only">Message</label>
                    <textarea name="message" id="message" class="form-control" placeholder="Message" rows="5"></textarea>
                </div>
                <button id="sendMessage" type="button" class="btn btn-primary me-2">SEND MESSAGE</button>
            </form>

        </section>

        <footer>Live Resume @ <a href="https://www.bootstrapdash.com" target="_blank" rel="noopener noreferrer">BootstrapDash</a>. All Rights Reserved 2020</footer>
    </main>
@endsection
