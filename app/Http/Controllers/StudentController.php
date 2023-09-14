<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreStudentRequest; // Import your form request class (create it if not already done).
use App\Models\User; // Import the User model.



class StudentController extends Controller
{


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = User::all();
        return view ('admin/student/index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     */
     public function create()
    {
        return view ('admin/student/add');
    }

    /**
     * Store a newly created resource in storage.
     */
 public function store(Request $request)
 {
    // Validate the incoming request data
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:1|confirmed',
        'address' => 'required|string|max:255',
        'batch' => 'required|string|max:255',
    ]);

    // Create a new User instance.
    $student = new User();
    $student->name = $validatedData['name'];
    $student->email = $validatedData['email'];
    $student->password = Hash::make($validatedData['password']); // Encrypt the password.
    $student->address = $validatedData['address'];
    $student->batch = $validatedData['batch'];

    // Save the student data.
    $savestudent = $student->save();

    if ($savestudent) {
        return redirect()->route('admin.student.index')->with('success', 'Data Is Successfully added.');
    } else {
        return redirect()->route('admin.student.create')->with('error', 'Something went wrong.');
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
        $student = User::find($id);
        return view('admin.student.edit')->with('student', $student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = User::find($id);
        $student->name = $request->name;
        $student->email = $request->email;
        $student->password = $request->password;
        $student->address = $request->address;
        $student->batch = $request->batch;
        $savestudent =  $student->save();
        if($savestudent) {
            return redirect()->route('admin.student.index')->with('success', 'Data Is Sucessfully edit.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $student = User::find($id);
        $student->delete();
        if($student) {
           return redirect()->route('admin.student.index')->with('success', 'student data has been deleted successfully.');
        }else {
               return redirect()->route('admin.student.index')->with('error', 'something went wrong.');
        }
    }
}
