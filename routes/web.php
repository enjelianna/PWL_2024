<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;

/*
|--------------------------------------------------------------------------
@@ -12,7 +19,84 @@
| be assigned to the "web" middleware group. Make something great!
|
*/

//Jobsheet1
Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome1');
});

//Jobsheet2
//Praktikum
Route::get('/hello', function () {
    return ('Hello World');
});

Route::get('/world', function () {
    return ('World');
});

Route::get('/', function () {
    return ('Selamat Datang');
});

Route::get('/about', function () {
    return ('NIM: 2241760016, NAMA: ANGELIA ANNA');
});

Route::get('/user/{Angelia}', function ($name) {
    return 'Nama saya '.$name;
    });

Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
 return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route::get('/Articles/{Id}', function ($Id){
    return 'Halaman Artikel dengan ID - '.$Id;
});

Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

Route::get('/hello', [WelcomeController::class, 'hello']);
Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::resource('photos', PhotoController::class)->only([
    'index', 'show'
   ]);
Route::resource('photos', PhotoController::class)->except([
    'create', 'store', 'update', 'destroy'
   ]);

Route::get('/greeting', function () {
return view('blog.hello', ['name' => 'Angelia Anna']);
});

Route::get('/greeting', [WelcomeController::class, 
'greeting']);

//Soal Praktikum Jobsheet2
// Halaman Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Halaman Products dengan route prefix kategori
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductController::class, 'foodBeverage'])->name('category.food-beverage');
    Route::get('/beauty-health', [ProductController::class, 'beautyHealth'])->name('category.beauty-health');
    Route::get('/home-care', [ProductController::class, 'homeCare'])->name('category.home-care');
    Route::get('/baby-kid', [ProductController::class, 'babyKid'])->name('category.baby-kid');
});

// Halaman User dengan route param
Route::get('/user/{id}/name/{name}', [UserController::class, 'showProfile'])->name('user.profile');

// Halaman Penjualan
Route::get('/sales', [SalesController::class, 'index'])->name('sales.index');
Route::post('/sales/process', [SalesController::class, 'process'])->name('sales.process');