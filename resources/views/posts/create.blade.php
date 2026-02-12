@extends('layout.app')

@section('content')
    <div class="form-container">
        <h3 class="text-center">Create Post</h3>
        <div class="form">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputTitle" class="form-label">Post's title</label>
                    <input type="text" class="form-control" id="exampleInputTitle" name="title">
                </div>
                <div class="mb-3">
                    <label for="exampleInputDescription" class="form-label">Post's Description</label>
                    <textarea type="text" class="form-control" id="exampleInputDescription" name="description"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPostedBy" class="form-label">Posted By</label>
                    <select class="form-select" name="postedBy">
                        <option selected disabled>Writer</option>
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
                     <button type="submit" class="btn btn-primary w-100">Submit</button>
             </form>
        </div>
    </div>
@endsection
