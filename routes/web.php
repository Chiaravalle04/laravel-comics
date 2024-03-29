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

    $navBar = [
        'characters',
        'comics',
        'movies',
        'tv',
        'games',
        'collectibles',
        'videos',
        'fans',
        'news',
        'shop',
    ];

    return view('welcome', [
        'links' => $navBar
    ]);
})->name('home');

Route::get('/comics', function () {

    $navBar = [
        'characters',
        'comics',
        'movies',
        'tv',
        'games',
        'collectibles',
        'videos',
        'fans',
        'news',
        'shop',
    ];

    $data = config('comics');

    return view('comics', [
        'superHero' => $data ], [
            'links' => $navBar
        ]
    );
})->name('comics');