<?php

use Illuminate\Support\Facades\Route;

/**
 * Frontend
 */

use App\Http\Controllers\Frontend\IndexController as FrontendIndex;

/*
 * Backend
*/

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

/* Backend Controller */
Route::group([
    'prefix' => 'backend',
    'as' => 'backend.',
//    'middleware' => 'auth',
], function () {
    /*
     * Backend Index & Logout  Controllers
    */
    Route::get('/', BackendIndex::class)->name('index');
//    Route::get('/logout', LogoutController::class)->name('logout');
});
