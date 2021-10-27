@extends('layouts.main')

@section('container')
<div class="row justify-content-center mb-3">
    <div class="col-md-7">
        <form action="/posts">
            @if (request('category'))
            <input type="hidden" name="category" value=" {{ request('category') }}">
            @endif
            @if (request('author'))
            <input type="hidden" name="author" value=" {{ request('author') }}">
            @endif
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search Books" name="search" value="{{request('search')}}">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>
@if ($posts->count())
<div class="container bg-light">
    <div class="row">
        @foreach($posts as $post)
        <div class="col-md-4 mb-5 mt-4">

            <a href="/posts/{{$post->slug}}" class="text-decoration-none text-white m-3">
                <div class="card text-white bg-dark mb-3">
                    <div>{{ $post->category->name  }}</div>
                    <img src="https://source.unsplash.com/500x400?{{$post->category->name}}" class="card-img-top p-3" alt="{{$post->category->name}}">
                    <div class="card-body">
                        <h5 class="card-title">{{$post->name}}</h5>
                        <p>
                            <small>
                                By :<a href="/posts?author={{$post->author->username}}" class="text-decoration-none text-white ">{{$post->author->name}}</a>
                                <p class="fw-bolder text-end">{{ $post->created_at->diffForHumans() }}</p>
                            </small>
                        </p>
                        <a href="/posts/{{$post->slug}}" class="btn btn-primary"> Details </a>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@else
<p class="text-center fs-4">No Post Found. </p>
@endif
{{$posts->links()}}
@endsection