<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Issue;

class IssueController extends Controller
{
     public function index()
    {
        $issues = Issue::all();
        return view ('admin/issue/index')->with('issues', $issues);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('admin/issue/add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bookissue = new Issue();
        $bookissue->student_id = $request->student_id;
        $bookissue->book_id = $request->book_id;
        $bookissue->fine = $request->fine;
        $bookissue->issue = $request->issue;
        $bookissue->due = $request->due;
        // $bookissue->return = $request->return;
        $savebookissue =  $bookissue->save();
        if($savebookissue) {
           return redirect()->route('admin.issue.index')->with('success', 'Data Is Sucessfully added.');
       }else {
                echo "Error";
               return view ('admin/issue/add')->with('error', 'something went wrong.');
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
        $bookissue = Issue::find($id);
        return view('admin.issue.edit')->with('bookissue', $bookissue);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $bookissue = Issue::find($id);
        $bookissue->student_id = $request->student_id;
        $bookissue->book_id = $request->book_id;
        $bookissue->fine = $request->fine;
        $bookissue->issue = $request->issue;
        $bookissue->due = $request->due;
        $bookissue->return = $request->return;
        $savebookissue =  $bookissue->save();
        if($savebookissue) {
            return redirect()->route('admin.issue.index')->with('success', 'Data Is Sucessfully edit.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Issue::find($id);
        $book->delete();
        if($book) {
           return redirect()->route('admin.book.index')->with('success', 'contact has been deleted successfully.');
        }else {
               return redirect()->route('admin.book.index')->with('error', 'something went wrong.');
        }
    }
}


