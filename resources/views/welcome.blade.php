<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Library Managment</title>
</head>

<body>
    <div class="container feature">
        <h1 class="text-center">Our Books</h1>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @if (count($books) == 0)
                <h3 class="text-center">There are no books  available yet.</h3>
            @else
                @foreach ($books as $book)
                    <div class="col">
                        <div class="gallerys">
                            
                            <div class="price">{{$book->title}}</div>

                         
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>

</body>

</html>
