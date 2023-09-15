@extends('admin.layout')
@section('main')
    <div class="container mt-5">
        <h3>Edit Book Details</h3>
        <form method="post" action="{{ route('admin.book.update', ['id' => $book->id]) }}" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $book->title }}">
                        <span class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control" id="author" name="author" value="{{ $book->author }}">
                        <span class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label for="publisher" class="form-label">Publisher</label>
                        <input type="text" class="form-control" id="publisher" name="publisher" value="{{ $book->publisher }}">
                        <span class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <input type="text" class="form-control" id="category" name="category" value="{{ $book->category }}">
                        <span class="text-danger"></span>
                    </div>
                    <div class="form-group">
                        <label for="imageInput">Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="images" type="file" class="custom-file-input" id="imageInput">
                                <label class="custom-file-label" for="imageInput">Choose file</label>
                            </div>
                        </div>
                    </div>
                    <button type="submit" style="margin: 1rem;" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
@endsection
