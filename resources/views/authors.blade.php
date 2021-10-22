@extends('layouts.main')

@section('container')

    <h1 class="mb-5">Based on  {{$title}}</h1>
    
@foreach ($authors as $author)
    <ul>
        <li>
             <a href="/posts?author={{$author->username}}" class="text-decoration-none">{{$author->name}}</a>
        </li>
    </ul>
@endforeach
@endsection