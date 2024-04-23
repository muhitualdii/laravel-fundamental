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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/list-menu', function () {
    return "Ini adalah halaman menampilkan semua menu yang ada di Caffe Amandemy";
});


Route::get('/list-menu/get-all-data', function () {
    return response()->json([
        'info' => 'data berhasil didapatkan',
        'data' => [
            [
                'makanan' => 'soto mie',
                'harga' => 8000
            ],
            [
                'makanan' => 'bakso malang',
                'harga' => 14000
            ],
            [
                'makanan' => 'ketoprak',
                'harga' => 7000
            ]
        ]
    ]);
});

Route::get('/list-menu/{menu}/{harga}', function ($menu, $price) {
    return "Anda telah memilih makanan $menu dengan harga $price";
});

