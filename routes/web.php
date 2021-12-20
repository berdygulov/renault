<?php

use Illuminate\Support\Facades\Route;

/* Frontend */

use App\Http\Controllers\Frontend\IndexController as FrontendIndex;

/* Auth Controllers */

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LogoutController;

/* Backend */

use App\Http\Controllers\Backend\IndexController as BackendIndex;


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

Route::get('/', FrontendIndex::class);

/* Guest Controller */

Route::group([
    'middleware' => 'guest',
], function () {
    Route::get('login', LoginController::class)->name('login');
    Route::post('auth', AuthController::class)->name('auth');
});

/* Backend Controller */

Route::group([
    'middleware' => 'auth',
    'prefix' => 'backend',
    'as' => 'backend.',
], function () {
    /*
     * Backend Index Controllers
    */
    Route::get('/', BackendIndex::class)->name('index');

    /* Logout Controller */
    Route::get('/logout', LogoutController::class)->name('logout');

    /* Applications Controller */
    Route::group([
        'prefix' => 'applications',
        'as' => 'applications.',
    ], function () {
        Route::get('/', ApplicationIndex::class)->name('index');
//        Route::get('/create', ApplicationCreate::class)->name('create');
//        Route::post('/', ApplicationStore::class)->name('store');
    });
});
