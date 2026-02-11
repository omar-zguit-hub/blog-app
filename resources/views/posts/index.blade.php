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
                        {{-- Do not use the syntax {{$post->title}} because we only have static data in the controller as an array; use $post['title'] instead.  --}}
                        <h2 class="post-title pe-3">{{ $post['title'] }}</h2>
                        <div class="d-flex gap-3">
                            <a href="{{ route('posts.edit', $post['id']) }}">
                                <i class="bi bi-pencil icon"></i>
                            </a>
                            <form action="">
                                <i class="bi bi-trash icon"></i>
                            </form>

                        </div>

                    </div>
                    <div class="post-meta">By <u>{{ $post['posted_by'] }} </u>• {{ $post['created_at'] }}</div>
                    <p class="post-text">{{ $post['description'] }}</p>
                    <a href="{{ route('posts.show', $post['id']) }}" class="read-more">Read More</a>
                </div>
            </div>
        @endforeach

    </div>
@endsection
