@extends('user.layout.main')
@section('mains')
<div class="container feature">
        <h1 class="text-center">Our Books</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @if (count($books) == 0)
                <h3 class="text-center">There are no books  available yet.</h3>
            @else
                @foreach ($books as $book)
                    <div class="col">
                        <div class="gallerys">
                            <td>
                                    <img src="{{ asset('/storage/' . $book->image) }}" alt="Post Image"
                                        class="img-fluid post-image" width='200' height='200'>
                                </td>
                            <div class="price">{{$book->title}}</div>

                         
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection