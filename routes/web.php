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

//menambahkan sebuah route pertama
Route::get('/hello', function () {
    return 'Hello World';
});

//menambahkan sebuah route /world
Route::get('/world', function () {
    return 'World';
});

// membuat route '/' menampilkan "Selamat Datang"
Route::get('/', function () {
    return 'Selamat Datang';
});

// membuat route '/about' menampilkan NIM dan Nama
Route::get('/about', function () {
    return '2341760104_Nova Diana Ramadhan';
});

// MEMBUAT ROUTING DENGAN PARAMETER
// memanggil route /user/{name} dan mengirimkan parameter
Route::get('/user/{name}', function ($name) {
    return 'Nama saya '.$name;
});

// route menerima lebih dari 1 parameter
Route::get('/posts/{post}/comments/{comment}', function($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

// membuat route /articles/{id}
Route::get('/articles/{id}', function ($id) {
    return "Halaman Artikel dengan ID " . $id;
});

// OPTIONAL PARAMETERS
// memanggil route /user dan mengirimkan parameter
Route::get('/user/{name?}', function ($name='null') {
    return 'Nama saya'.$name;
});

// menambahkan nama 
Route::get('/user/{name?}', function ($name=' Nova') {
    return 'Nama saya'.$name;
});






