<?php

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
    return view('frontend.home.index');
})->name('home');


// About
Route::get('/about', function () {
    return view('frontend.about.index');
})->name('about');


// Classes
Route::get('/classes', function () {
    return view('frontend.classes.index');
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
 Route::get('/teacher-show', function() {
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
