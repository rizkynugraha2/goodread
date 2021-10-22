@extends('layouts.main')

@section('container')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <h2>{{$post->name}}</h2>
            <p>By : <a href="/posts?author={{$post->author->username}}" class="text-decoration-none">{{$post->author->name}}</a></p>
            <p>Category : <a href="/posts?category={{$post->category->slug}}" class="text-decoration-none">{{ $post->category->name  }}</a></p>
            <img src="https://source.unsplash.com/500x400?{{$post->category->name}}" class="card-img-top p-3" alt="{{$post->category->name}}">
            <p>{{$post->sinopsis}}</p>
        </div>
    </div>
</div>
<p>{!! $post->body !!}</p>


@endsection