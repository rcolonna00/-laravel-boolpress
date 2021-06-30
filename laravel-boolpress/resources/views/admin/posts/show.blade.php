@extends('layouts.app')

@section('content')
    <div class="container">
        <div>
            <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}" class="btn btn-success">Modifica post</a>
        </div>

        <h1>{{ $post->title }}</h1>

        @if($post->cover)
            <div class="mt-2 mb-2">
                <img src="{{ asset('storage/' . $post->cover) }}" alt="{{ $post->title }}">
            </div>
        @endif

        <div class="mt-2 mb-2"><strong>Slug:</strong> {{ $post->slug }}</div>

        @if($post_category)
            <div class="mt-2 mb-2"><strong>Category:</strong> {{ $post_category->name }}</div>
        @endif

        @if($post_tags->isNotEmpty())
            <div class="mt-2 mb-2">
                <strong>Tags:</strong> 
                @foreach ($post_tags as $tag)
                    {{ $tag->name }}{{ $loop->last ? '' : ', ' }}
                @endforeach
            </div>
        @endif
        
        <p>{{ $post->content }}</p>
    </div>
@endsection