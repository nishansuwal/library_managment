@extends('admin.layout')
@section('main')
    <body>
        <div class="container mt-5">
            
            <h3>Add book details</h3>
            <form method="post" action="{{ route('admin.book.store') }}">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" placeholder="Enter title"
                                    name="title" value="">
                                <span class="text-danger"></span>
                            </div>
                        
                            <div class="mb-3">
                                <label for="author" class="form-label">author</label>
                                <textarea class="form-control" id="author" placeholder="Enter author name" name="author" ></textarea>
                                <span class="text-danger"></span>
                            </div>
                            <div class="mb-3">
                                <label for="publisher" class="form-label">publisher</label>
                                <textarea class="form-control" id="publisher" placeholder="Enter publisher name" name="publisher" ></textarea>
                                <span class="text-danger"></span>
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">category</label>
                                <textarea class="form-control" id="category" placeholder="Enter category type" name="category" ></textarea>
                                <span class="text-danger"></span>
                            </div>
                           
                           
                            <button type="submit" style="margin: 1rem;" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
        </div>
        </form>

        <!-- Bootstrap 5 JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>

    </html>
@endsection
