@extends('layout.app')

@section('content')
    <div class="form-container">
        <h3 class="text-center">Update Post</h3>
        <div class="form">
            <form>
                <div class="mb-3">
                    <label for="exampleInputTitle" class="form-label">Post's title</label>
                    <input type="text" class="form-control" id="exampleInputTitle">
                </div>
                <div class="mb-3">
                    <label for="exampleInputDescription" class="form-label">Post's Description</label>
                    <textarea type="text" class="form-control" id="exampleInputDescription"></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPostedBy" class="form-label">Posted By</label>
                    <select class="form-select">
                        <option selected disabled>Writer</option>
                        <option value="1">ahmed</option>
                        <option value="2">omar</option>
                        <option value="3">karim</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary w-100">Update</button>
            </form>
        </div>
    </div>
@endsection
