@extends('admin.layout')
@section('main')
    <body>
        <div class="container mt-5">
            
            <h3>Edit book details</h3>
            <form method="post" action="{{ route('admin.book.update', ['id' => $book->id]) }}">

                @csrf
                <div class="card">
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $book->title }}">
                                <span class="text-danger"></span>
                            </div>
                            <div class="mb-3">
                                <label for="author" class="form-label">author</label>
                                <input type="text" class="form-control" id="author" name="author"
                                    value="{{ $book->author }}">
                                <span class="text-danger"></span>
                            </div>
                            <div class="mb-3">
                                <label for="publisher" class="form-label">publisher</label>
                                <input type="text" class="form-control" id="publisher" name="publisher"
                                    value="{{ $book->publisher }}">
                                <span class="text-danger"></span>
                            </div>
                            <div class="mb-3">
                                <label for="category" class="form-label">category</label>
                                <input type="text" class="form-control" id="category" name="category"
                                    value="{{ $book->category }}">
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
