<?php

use App\Models\Blog;
use App\Models\Classes;
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

Route::get('/', function () {
    $blogs = Blog::take(3)->orderByDesc('id')->get();
    $teachers = Teacher::take(4)->orderByDesc('id')->get();
    $classes = Classes::take(7)->orderByDesc('id')->get();
    $allClasses = Classes::take(7)->orderByDesc('id')->get();
    return view('frontend.home.index', compact('blogs','teachers', 'classes', 'allClasses'));
})->name('home');

// Admin
Route::get('/admin', function () {
    return view('admin.index');
})->name('admin');


// About
Route::get('/about', function () {
    return view('frontend.about.index');
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
    return view('frontend.contact.index');
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