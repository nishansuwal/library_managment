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
        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->publisher = $request->publisher;
        $book->category = $request->category;
        $savebook =  $book->save();
        if($savebook) {
           return redirect()->route('admin.book.index')->with('success', 'Data Is Sucessfully added.');
       }else {
               return view ('admin/book/add')->with('error', 'something went wrong.');
       }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        $book->title = $request->title;
        $book->author = $request->author;
        $book->publisher = $request->publisher;
        $book->category = $request->category;
        $savebook =  $book->save();
        if($savebook) {
            return redirect()->route('admin.book.index')->with('success', 'Data Is Sucessfully edit.');
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
