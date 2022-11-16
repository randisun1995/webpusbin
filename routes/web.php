<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('/', function () {
//     return view('portal.index');
// });

Route::get('/', [PostController::class, 'index1'] );

Route::get('/about', function () {
    return view('portal.about');
});

Route::get('/dashboard', function () {
    return view('portal.dashboard');
});

Route::get('/konsultasi', function () {
    return view('usulkonsultasi');
});

Route::get('/admin', function () {
    return view('admin\admin');
});



Route::get('/blog', [PostController::class, 'index'] );


//halaman single post
Route::get('/posts/{post:slug}', [PostController::class, 'show'] );


Route::get('/categories/{category:slug}', function(Category $category ) {
    return view('berita\category', [
        'title' => $category -> name,
        'posts' => $category -> posts,
        'category' => $category -> name
    ]);
});

Route::get('/categories', function( ) {
return view('berita\categories', [
    'title' => 'Post Categories',
    'categories' => Category::all()

    ]);
});

