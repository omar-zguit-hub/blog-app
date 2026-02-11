@extends('layout.app')
@section('content')
    <div class="Detail-Post">
        <div class="post-content">
            <h1>{{ $post->title }}</h1>
            <div class="post-meta-detail">By <u>{{ $post->user->name }}</u>• {{ $post->created_at->format('Y/m/d') }}</div>
            <p class=" description-show fs-4 mt-3 ">{{ $post->description }}</p>
        </div>
    </div>
@endsection
