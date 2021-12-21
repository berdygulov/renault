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

/* Application Controller */

use App\Http\Controllers\Application\ShowController as ApplicationShow;
use App\Http\Controllers\Application\CreateController as ApplicationCreate;

/**
 * Master Controllers
 */

use App\Http\Controllers\Backend\Master\IndexController as MasterIndex;
use App\Http\Controllers\Backend\Master\CreateController as MasterCreate;
use App\Http\Controllers\Backend\Master\StoreController as MasterStore;
use App\Http\Controllers\Backend\Master\ShowController as MasterShow;
use App\Http\Controllers\Backend\Master\EditController as MasterEdit;
use App\Http\Controllers\Backend\Master\UpdateController as MasterUpdate;
use App\Http\Controllers\Backend\Master\DestroyController as MasterDestroy;

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

Broadcast::routes();

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
    'prefix'     => 'backend',
    'as'         => 'backend.',
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
        'as'     => 'applications.',
    ], function () {
//        Route::get('/', ApplicationIndex::class)->name('index');
        Route::get('/create', ApplicationCreate::class)->name('create');
//        Route::post('/', ApplicationStore::class)->name('store');
        Route::get('/{application_id}', ApplicationShow::class)->name('show');
    });

    /**
     * Master Routes
     */
    Route::group([
        'prefix' => 'masters',
        'as'     => 'masters.'
    ], function () {
        Route::get('/', MasterIndex::class)->name('index');
        Route::get('create', MasterCreate::class)->name('create');
        Route::post('store', MasterStore::class)->name('store');
        Route::get('show', MasterShow::class)->name('show');
        Route::get('edit/{master_id}', MasterEdit::class)->name('edit');
        Route::patch('update/{master_id}', MasterUpdate::class)->name('update');
        Route::get('delete/{master_id}', MasterDestroy::class)->name('delete');
    });
});
