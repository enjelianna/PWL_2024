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
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello World';
   });

Route::get('/world', function () {
    return 'World';
   });

Route::get('/', function () {
    return 'Selamat Datang';
   });

Route::get('/about', function () {
    return ('NIM: 2241760016, NAMA: ANGELIA ANNA PUTRI R');
   });

   Route::get('/user/{Angelia}', function ($name) {
    return 'Nama Saya '.$name;
   });

   Route::get('/posts/{post}/comments/{comment}', function
    ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-:" .$commentId;
   });

   Route::get('/Articles/{Id}', function ($Id) {
   return 'Halaman Artikel dengan ID - '.$Id;
  });

  Route::get('/User/{name?}', function ($name=null) {
    return 'Nama Saya '.$name;
   });

   Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

Route::get('/hello', [App\Http\Controllers\WelcomeController::class, 'hello']);
Route::get('/', [App\Http\Controllers\PageController::class, 'index']);
Route::get('/about', [App\Http\Controllers\PageController::class, 'about']);
Route::get('/articles/{id}', [App\Http\Controllers\PageController::class, 'articles']);

use App\Http\Controllers\PhotoController;
Route::resource('photos', App\Http\Controllers\PhotoController::class)->only(['index', 'show']);

Route::resource('photos', App\Http\Controllers\PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
   ]);

   Route::get('/greeting', function () {
    return view('blog.hello', ['name' => 'Angelia']);
    });
        
    Route::get('/greeting', [App\Http\Controllers\WelcomeController::class,'greeting']);
    return view('blog.hello', ['name' => 'Angelia']);

