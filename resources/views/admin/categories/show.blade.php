@extends('layouts.admin')

@section('content')

    <h1 class="text-center">{{$category->name}}</h1>
    <ul>
        @foreach ($category->posts  as $post)
            <li>{{$post->title}}</li>
        @endforeach
    </ul>


@endsection