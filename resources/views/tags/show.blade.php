@extends('layouts.app')

@section('content')
    <h1>{{ $tag->name }}</h1>

    <div class="mt-4">
        <h3>Posts with this Tag</h3>
        @if ($tag->posts->count() > 0)
            <ul class="list-group">
                @foreach ($tag->posts as $post)
                <li class="list-group-item">
                    <a href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                    <span class="text-muted">({{ $post->created_at->format('M d, Y') }})</span>
                </li>
                @endforeach
            </ul>
        @else
            <p>No posts found with this tag.</p>
        @endif
    </div>

    <div class="mt-4">
        <a href="{{ route('tags.index') }}" class="btn btn-secondary">Back to Tags</a>
    </div>
@endsection