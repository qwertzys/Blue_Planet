@extends('layouts.main')

@section('container')
    <h1>Recent Post</h1>
    <div class="d-flex flex-wrap justify-content-center gap-5">
        <div class="card mb-3 justify-content-center" style="width: 32rem;">
                <img src="{{ asset('img/Gambar_Post.jpg') }}" class="card-img-top" alt="..." style="width: 100%">
                <div class="card-body text-center">
                    <h3 class="card-title"> <a href="/posts/{{$posts[0]->slug }}" class="text-decoration-none text-dark">{{$posts[0]->title}} </a></h3>
    
                    <p>
                        <small class="text-body-secondary">
                            By. <a href="/authors/{{$posts[0]->user->id}}" class="text-decoration-none">{{ $posts[0]->user->name }}</a> in <a href="/categories/{{$posts[0]->category->slug}}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{$posts[0]->created_at->diffForHumans()}}
                        </small>
                    </p>
    
                    <p class="card-text"> {{$posts[0]->excerpt}} </p>
    
                    <a href="/posts/{{$posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
    
                </div>
            </div>
    </div>
@endsection