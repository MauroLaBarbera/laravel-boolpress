@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$post->title}}</h1>
        @if ($post->category)
        <h5>Category: <span class="badge bg-info ">{{$post->category->name}}</span></h5>
        @endif
        
        <p>{{ $post->content}}</p>

        <a class="btn btn-warning" href="{{ route('admin.posts.edit', $post->id)}}">Edit</a>
    </div>
@endsection 