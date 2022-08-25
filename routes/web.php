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
   
    $data = [
        'comics_array' => config('comics')
    ];
    return view('comics', $data);
})->name('comics');

Route::get('/single-comics/{id}', function ($id) {
   
    $comics_array = config('comics');
    $single_comics = [];

    foreach($comics_array as $comics) {
        if($comics['id'] == $id) {
            $single_comics = $comics;
        }
    }

    if(empty($single_comics)) {
        abort('404');
    }

    $data = [
        'comics' => $single_comics
    ];
    return view('single-comics',$data);
})->name('single-comics');
