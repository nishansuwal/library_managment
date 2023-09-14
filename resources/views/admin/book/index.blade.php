@extends('admin.layout')
@section('main')
    <div class="container mt-5">
        @if (Session::has('success'))
            <div class="alert alert-success">
                {{ Session::get('success') }}
            </div>
        @endif

        @if (Session::has('error'))
            <div class="alert alert-danger">
                {{ Session::get('error') }}
            </div>
        @endif

        <h1>View books</h1>

        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>                        
                        <th>ID</th>
                        <th>Title</th>
                        <th>author</th>
                        <th>publisher</th>
                        <th>category</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->id }}</td>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->publisher }}</td>
                            <td>{{ $book->category }}</td>
                            
                            <td>
                                <a class="btn btn-primary btn-action" href="{{ route('admin.book.edit', ['id' => $book->id]) }}">Edit</a>
                                <form action="{{ route('admin.book.delete', ['id' => $book->id]) }}" method="POST">
                                    @csrf
                                    <button class="btn btn-danger btn-action">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-r-hO/bMWBp2iqokZzQJgPI6J7ApP5kAlFpQSO2wVXkI5hUTDQTrxBry8xqa+VwI3" crossorigin="anonymous"></script>
@endsection
