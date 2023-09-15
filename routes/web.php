<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AuthenticatedSessionController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\IssueController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[BookController::class,'show'])->name('book.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::namespace('Auth')->group(function(){
            Route::get('login', [AuthenticatedSessionController::class,'create'])->name('login'); 
            Route::post('login', [AuthenticatedSessionController::class,'store'])->name('admin.login');             
            Route::get('dashboard', [AuthenticatedSessionController::class,'home'])->name('dashboard'); 
            // Route::get('/admin/dashboard', function () {
            //     dd('dashboard');
            //     // return view('dashboard');
            // });

            Route::get('/book/index',[BookController::class,'index'])->name('book.index');
            Route::get('/book/add',[BookController::class,'create'])->name('book.add');
            Route::post('/book/store',[BookController::class,'store'])->name('book.store');
            Route::post('/book/delete/{id}',[BookController::class,'destroy'])->name('book.delete');
            Route::get('/book/edit/{id}',[BookController::class,'edit'])->name('book.edit');
            Route::post('/book/update/{id}',[BookController::class,'update'])->name('book.update');


            Route::get('/student/index',[StudentController::class,'index'])->name('student.index');
            Route::get('/student/add',[StudentController::class,'create'])->name('student.add');
            Route::post('/student/store',[StudentController::class,'store'])->name('student.store');
            Route::post('/student/delete/{id}',[StudentController::class,'destroy'])->name('student.delete');
            Route::get('/student/edit/{id}',[StudentController::class,'edit'])->name('student.edit');
            Route::post('/student/update/{id}',[StudentController::class,'update'])->name('student.update');


            Route::get('/issue/index',[IssueController::class,'index'])->name('issue.index');
            Route::get('/issue/add',[IssueController::class,'create'])->name('issue.add');
            Route::post('/issue/store',[IssueController::class,'store'])->name('issue.store');
            Route::post('/issue/delete/{id}',[IssueController::class,'destroy'])->name('issue.delete');
            Route::get('/issue/edit/{id}',[IssueController::class,'edit'])->name('issue.edit');
            Route::post('/issue/update/{id}',[IssueController::class,'update'])->name('issue.update');

    });
});
