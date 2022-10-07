@extends('frontend.layouts.app')
@section('title')
    Blog
@endsection
@section('content')
    <main>
        <section class="portfolio-section">
            <h2 class="section-title">PORTFOLIO</h2>

            <div class="portfolio-wrapper">
                <figure class="portfolio-item hover-box">
                    <img src="{{asset('assets/images/img_1.png')}}" alt="project" class="portfolio-item-img">
                    <figcaption class="portfolio-item-details overlay">
                        <h5 class="portfolio-item-title">PROJECT 01</h5>
                        <p class="portfolio-item-description">Branding, Photography</p>
                    </figcaption>
                </figure>
                <figure class="portfolio-item hover-box">
                    <img src="{{asset('assets/images/img_2.png')}}" alt="project" class="portfolio-item-img">
                    <figcaption class="portfolio-item-details overlay">
                        <h5 class="portfolio-item-title">PROJECT 02</h5>
                        <p class="portfolio-item-description">Branding, Photography</p>
                    </figcaption>
                </figure>
                <figure class="portfolio-item hover-box">
                    <img src="{{asset('assets/images/img_3.png')}}" alt="project" class="portfolio-item-img">
                    <figcaption class="portfolio-item-details overlay">
                        <h5 class="portfolio-item-title">PROJECT 03</h5>
                        <p class="portfolio-item-description">Branding, Photography</p>
                    </figcaption>
                </figure>
                <figure class="portfolio-item hover-box">
                    <img src="{{asset('assets/images/img_4.png')}}" alt="project" class="portfolio-item-img">
                    <figcaption class="portfolio-item-details overlay">
                        <h5 class="portfolio-item-title">PROJECT 04</h5>
                        <p class="portfolio-item-description">Branding, Photography</p>
                    </figcaption>
                </figure>
                <figure class="portfolio-item hover-box">
                    <img src="{{asset('assets/images/img_5.png')}}" alt="project" class="portfolio-item-img">
                    <figcaption class="portfolio-item-details overlay">
                        <h5 class="portfolio-item-title">PROJECT 05</h5>
                        <p class="portfolio-item-description">Branding, Photography</p>
                    </figcaption>
                </figure>
                <figure class="portfolio-item hover-box">
                    <img src="{{asset('assets/images/img_6.png')}}" alt="project" class="portfolio-item-img">
                    <figcaption class="portfolio-item-details overlay">
                        <h5 class="portfolio-item-title">PROJECT 06</h5>
                        <p class="portfolio-item-description">Branding, Photography</p>
                    </figcaption>
                </figure>
                <figure class="portfolio-item hover-box">
                    <img src="{{asset('assets/images/img_7.png')}}" alt="project" class="portfolio-item-img">
                    <figcaption class="portfolio-item-details overlay">
                        <h5 class="portfolio-item-title">PROJECT 07</h5>
                        <p class="portfolio-item-description">Branding, Photography</p>
                    </figcaption>
                </figure>
                <figure class="portfolio-item hover-box">
                    <img src="{{asset('assets/images/img_8.png')}}" alt="project" class="portfolio-item-img">
                    <figcaption class="portfolio-item-details overlay">
                        <h5 class="portfolio-item-title">PROJECT 08</h5>
                        <p class="portfolio-item-description">Branding, Photography</p>
                    </figcaption>
                </figure>
            </div>

        </section>
        <footer>Live Resume @ <a href="https://www.bootstrapdash.com" target="_blank" rel="noopener noreferrer">BootstrapDash</a>. All Rights Reserved 2020</footer>
    </main>
@endsection
