<?php

use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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

Route::get('/facebook/redirect', function () {
    return Socialite::driver('facebook')->redirect();
});

Route::get('/facebook/callback', function () {
    $user = Socialite::driver('facebook')->user();
});
