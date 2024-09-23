<?php

use Illuminate\Support\Facades\Route;

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
    //dichiaro una variabile
    $title = 'Hello World';
    $pages = [
        'page_1' => 'Page 1',
        'page_2' => 'Page 2',
    ];
    
    //collego la view a home.blade.php che passa il valore di $title
    return view('home', compact('title', 'pages'));
})->name('home');

Route::get('/page_1', function () {
    //dichiaro una variabile
    $title = 'Goodbye World';
    //collego la view a home.blade.php che passa il valore di $title
    return view('page_1', compact('title'));
})->name('page_1');

Route::get('/page_2', function () {
    //dichiaro una variabile
    $title = 'Please Come Back World';
    //collego la view a home.blade.php che passa il valore di $title
    return view('page_2', compact('title'));
})->name('page_2');