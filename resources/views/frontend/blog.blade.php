@extends('frontend.layouts.app')
@section('title')
    Blog
@endsection
@section('content')
    <main>
        <section class="blog-section">
            <h2 class="section-title">LATEST NEWS</h2>

            <div class="blog-posts-wrapper">
                @foreach($postList as $item)
                <article class="blog-post">
                    <a href="{{route('blog.detail' ,['id' => $item->id])}}" class="blog-post-link">
                        <img src="{{asset($item->image)}}" alt="news 1" class="blog-post-thumbnail">
                        <h5 class="blog-post-title">{{$item->title}}</h5>

                    </a>
                    <p class="blog-post-meta">
                        <span class="post-published-date">{{$item->created_at}}</span>

                    </p>
                </article>
                @endforeach

            </div>
        </section>
        <footer>Live Resume @ <a href="https://www.bootstrapdash.com" target="_blank" rel="noopener noreferrer">BootstrapDash</a>. All Rights Reserved 2020</footer>
    </main>
@endsection
