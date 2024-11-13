@extends('layouts.main')

@section('container')
    <h1 class="mb-5"> Post Categories</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)
            <div class="card mb-5" style="width: 18rem px5">
                <div class="card-body">
                  <h5 class="card-title"><a href="/categories/{{$category->slug }}"> {{$category->name}} </a></h5>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection