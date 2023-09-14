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
                        <th>name</th>
                        <th>email</th>
                        <th>address</th>
                        <th>batch</th>
                        <th>password</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->address }}</td>
                            <td>{{ $student->batch }}</td>
                            <td>{{ $student->password }}</td>
                            
                            <td>
                                <a class="btn btn-primary btn-action" href="{{ route('admin.student.edit', ['id' => $student->id]) }}">Edit</a>
                                <form action="{{ route('admin.student.delete', ['id' => $student->id]) }}" method="POST">
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
