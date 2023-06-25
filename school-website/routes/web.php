<?php

use App\Models\Blog;
use App\Models\Classes;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Support\Facades\Route;

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

// Frontend qismlari

// Front
Route::get('/', function () {
    $blogs = Blog::take(3)->orderByDesc('id')->get();
    $teachers = Teacher::take(4)->orderByDesc('id')->get();
    $classes = Classes::take(7)->orderByDesc('id')->get();
    $allClasses = Classes::take(7)->orderByDesc('id')->get();
    return view('frontend.home.index', compact('blogs','teachers', 'classes', 'allClasses'));
})->name('home');

// About
Route::get('/about', function () {
    $classes = Classes::take(8)->orderByDesc('id')->get();
    $allClasses = Classes::all();
    return view('frontend.about.index', compact('classes', 'allClasses'));
})->name('about');

// Classes
Route::get('/classes', function () {
    $classes = Classes::all();
    return view('frontend.classes.index', compact('classes'));
})->name('classes.index');

// classes single
Route::get('/class-detail', function () {
    return view('frontend.classes.detail');
})->name('detail');

// courses
Route::get('/kurslar', function () {
    $courses = Course::all();
    return view('frontend.course.index', compact('courses'));
})->name('course.index');

// courses single
Route::get('/course-detail/{id}', function ($id) {
    $course=Course::find($id);
    return view('frontend.course.detail',compact('course'));
})->name('course.detail');


// Teacher
Route::get('/teachers', function () {
    return view('frontend.teachers.index');
})->name('teachers.index');

// Teacher show
Route::get('/teacher-show', function () {
    return view('frontend.teachers.show');
})->name('teachers.show');

// Contact
Route::get('/contact', function () {
    $courses = Course::all();
    return view('frontend.contact.index', compact('courses'));
})->name('contact');

// Blog
Route::get('/blog', function () {
    return view('frontend.blog.index');
})->name('blog.index');

// Blog show
Route::get('/blog-show', function () {
    return view('frontend.blog.show');
})->name('blog.show');

// 404
Route::get('/404', function () {
    return view('frontend.errors.404');
})->name('404');


// Admin
Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');

// Admin Qisimlari
    Route::resource('/abouts',\App\Http\Controllers\AboutController::class);
    Route::resource('/teacher',\App\Http\Controllers\TeacherController::class);
    Route::resource('/class',\App\Http\Controllers\ClassesController::class);
    Route::resource('/weeks',\App\Http\Controllers\WeekController::class);
    Route::resource('/courses',\App\Http\Controllers\CourseController::class);
    Route::resource('/categories',\App\Http\Controllers\CategoryController::class);
    Route::resource('/blogs',\App\Http\Controllers\BlogController::class);

