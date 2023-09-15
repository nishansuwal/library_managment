<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use File;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view ('admin/book/index')->with('books', $books);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin/book/add');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
 {
    $requestData = $request->all();
    if ($request->hasFile('images')) {
        $fileNames = time() . $request->file('images')->getClientOriginalName();
        $path = $request->file('images')->storeAs('books', $fileNames, 'public');
    } else {
        $path = '';
    }
    // dd($path);
    $book = new Book([
        'image' => $path,
        'title' => $request->title,
        'author' => $request->author,
        'publisher' => $request->publisher,
        'category' => $request->category,
    ]);

    $savebook = $book->save();

    if ($savebook) {
        return redirect()->route('admin.book.index')->with('success', 'Data Is Successfully added.');
    } else {
        return view('admin/book/add')->with('error', 'Something went wrong.');
    }
 }


    /**
     * Display the specified resource.
     */
    public function show()
    {
        $books = Book::all();
        return view ('user.home')->with('books', $books);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::find($id);
        return view('admin.book.edit')->with('book', $book);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $book = Book::find($id);
        if ($request->hasFile('images')) {
            $newImage = $request->file('images');
            $fileName = time() . $newImage->getClientOriginalName();
            $path = $newImage->storeAs('books', $fileName, 'public');

            // Check if the old image exists and delete it
            // if (Storage::disk('public')->exists($book->image)) {
            if (File::exists(public_path('/storage/' . ($book->image)))) {
                // Storage::disk('public')->delete($book->image);
                File::delete(public_path('/storage/' .($book->image)));
            }

            $book->image = $path;
        }
        // dd($path);
        $book->title = $request->title;
        $book->author = $request->author;
        $book->publisher = $request->publisher;
        $book->category = $request->category;
        $savebook = $book->save();

        if ($savebook) {
            return redirect()->route('admin.book.index')->with('success', 'Data Is Successfully edited.');
        } else {
            return back()->with('error', 'Something went wrong.');
        }
    }




    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::find($id);
        $book->delete();
        if($book) {
           return redirect()->route('admin.book.index')->with('success', 'contact has been deleted successfully.');
        }else {
               return redirect()->route('admin.book.index')->with('error', 'something went wrong.');
        }
    }
}
