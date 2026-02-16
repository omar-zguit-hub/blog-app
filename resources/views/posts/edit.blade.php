@extends('layout.app')

@section('content')
    <div class="form-container">
        <h3 class="text-center">Update Post</h3>
        <div class="form">
            <form action="{{ route('posts.update', $oldPost->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputTitle" class="form-label">Post's title</label>
                    <input type="text" class="form-control" id="exampleInputTitle" name="title"
                        value="{{ $oldPost->title }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputDescription" class="form-label">Post's Description</label>
                    <textarea type="text" class="form-control" id="exampleInputDescription" name="description">{{ $oldPost->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPostedBy" class="form-label">Posted By</label>
                    <select class="form-select" name="postedBy">
                        <option selected disabled>Writer</option>
                        @foreach ($users as $user)
                            <option @selected($user->id) value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary w-100">Update</button>
            </form>
        </div>
    </div>
@endsection
