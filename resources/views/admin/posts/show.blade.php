@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{$post->title}}</h1>
        @if ($post->category)
        <h5>Category: <span class="badge bg-info ">{{$post->category->name}}</span></h5>
        @endif
        
        <p>{{ $post->content}}</p>

        <a class="btn btn-warning" href="{{ route('admin.posts.edit', $post->id)}}">Edit</a>

        {{-- POST TAGS --}}
        @if (count($post->tags) > 0)
            <h4 class="mt-3"> Tags </h4>
            @foreach ($post->tags as $tag)
                <span class="badge bg-danger">{{ $tag->name }}</span>
            @endforeach
        @endif

    </div>
@endsection 