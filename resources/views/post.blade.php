@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8-md">
                <h2> {{$post->title}} </h2>

                <p>By. <a href="/authors/{{$post->user->id}}" class="text-decoration-none"> {{$post->user->name}} </a> in <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{ $post->category->name }}</a></p>
            
                 {{-- <img src="https://source.unsplash.com//1200x400/?{{ $posts->category->name}}" class="card-img-top" alt="..."> --}}

                <article class="fs-5">
                    {!! $post->body !!}
                </article>
            
                <a href="/posts" class="d-block mt-3">Back to Posts</a>
            </div>
        </div>
    </div>


@endsection