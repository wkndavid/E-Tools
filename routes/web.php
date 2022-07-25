<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/activities', function () {
    return view('activities');
})->middleware(['auth'])->name('activities');

Route::get('/description', function () {
    return view('description');
})->middleware(['auth'])->name('description');

// Route::get('/courses/activies', 'CourseController@activies')->name('courses.activies');

Route::get('courses/activies', [CourseController::class, 'activies']);

require __DIR__.'/auth.php';
