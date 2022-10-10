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
    return view('home');
});

Route::get('/comics', function () {
    $data = [
        'comics' => config('comics')
    ];
    return view('products.index', $data);
})->name('prodotti');

// ------------------------------------
Route::get('/comics/{id}', function ($id) {
    $comics = config('comics');

    if ($id < count($comics)) {
        $comic = $comics[$id];
        $data = [
            'comic' => $comic
        ];
        return view('products.show', $data);
    } else {
        abort(404);
    }
})->where('id', '[0-9]+')->name('prodotto');



Route::get('/comics/{id}/ciao', function ($id) {
    return $id;
});
