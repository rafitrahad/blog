@extends('layout.home')
    @section('content')
     <a href="{{route('show.store')}}">Post</a>

     @foreach($posts as $post)
        <div>

        <h1>{{$post->title}}</h1>
        <h3>{{$post->summary}}</h3>
        <img src="{{ Storage::url($post->file_path)}}" alt="avatar" />
        <h4>{{$post->description}}</h4>

        </div>
    
     @endforeach

    @endsection
