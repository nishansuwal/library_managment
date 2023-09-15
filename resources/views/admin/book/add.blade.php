@extends('admin.layout')
@section('main')
    <div class="container mt-5">
        <h3>Add book details</h3>
        <form method="post" action="{{ route('admin.book.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="">
                        <span class="text-danger"></span>
                    </div>

                    <div class="mb-3">
                        <label for="author" class="form-label">Author</label>
                        <textarea class="form-control" id="author" placeholder="Enter author name" name="author"></textarea>
                        <span class="text-danger"></span>
                    </div>
                    
                    <div class="mb-3">
                        <label for="publisher" class="form-label">Publisher</label>
                        <textarea class="form-control" id="publisher" placeholder="Enter publisher name" name="publisher"></textarea>
                        <span class="text-danger"></span>
                    </div>
                    
                    <div class="mb-3">
                        <label for="category" class="form-label">Category</label>
                        <textarea class="form-control" id="category" placeholder="Enter category type" name="category"></textarea>
                        <span class="text-danger"></span>
                    </div>

                    <div class="form-group">
                        <label for="images">Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="images" name="images">
                                <label class="custom-file-label" for="images">Choose file</label>
                            </div>
                        </div>
                    </div>

                    <button type="submit" style="margin: 1rem;" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
