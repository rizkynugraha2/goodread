@extends('layouts.main')

@section('container')

<h1 class="mb-5">Based on {{$title}}</h1>
<div class="container">
    <div class="row">
        @foreach($categories as $category)
        <div class="col-md-4 mb-5 mt-4">
            <a href="/posts?category={{$category->slug}}">
                <div class="card bg-dark text-light">
                    <img src="https://source.unsplash.com/500x400?{{$category->name}}" class="card-img" alt="{{$category->name}}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title bg-dark text-center flex-fill">{{$category->name}}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>
@endsection