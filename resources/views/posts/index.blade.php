@extends('layout.app')
@section('content')
    <div class="d-flex justify-content-between m-5 p-2">
        <h2>Posts</h2>
        <a href="{{ route('posts.create') }}">
            <button class="btn btn-success">Create Post</button>
        </a>

    </div>
    <div class="posts-container">
        @foreach ($AllPosts as $post)
            <div class="post-card">
                <div class="post-content">
                    <div class="d-flex justify-content-between">
                        {{-- use this syntax {{$post->title}} because we have now object data from DB  --}}
                        <h2 class="post-title pe-3">{{ $post->title }}</h2>
                        <div class="d-flex gap-3">
                            <a href="{{ route('posts.edit', $post->id) }}">
                                <i class="bi bi-pencil icon"></i>
                            </a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="delete">
                                    <i class="bi bi-trash icon"></i>
                                </button>

                            </form>

                        </div>

                    </div>
                    <div class="post-meta">By <u>{{ $post->user->name }} </u>• {{ $post->created_at->format('Y/m/d') }}
                    </div>
                    <p class="post-text">{{ $post->description }}</p>
                    <a href="{{ route('posts.show', $post->id) }}" class="read-more">Read More</a>
                </div>
            </div>
        @endforeach

    </div>
@endsection
