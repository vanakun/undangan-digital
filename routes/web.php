<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\UndanganController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route for accessing the wedding invitation page without login


// Default route
Route::view('/', 'welcome');

// Dashboard routes
Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard', 'as' => 'admin.'], function () {
    Route::get('/', HomeController::class)->name('home');
    Route::get('/tambah-pengantin', [HomeController::class, 'createpengantin'])->name('createpengantin');
    Route::get('/undangan', [UndanganController::class, 'index'])->name('indexpengantin');
   

    // Links that return views, to get components from there
    Route::view('/buttons', 'admin.buttons')->name('buttons');
    Route::view('/cards', 'admin.cards')->name('cards');
    Route::view('/charts', 'admin.charts')->name('charts');
    Route::view('/forms', 'admin.forms')->name('forms');
    Route::view('/modals', 'admin.modals')->name('modals');
    Route::view('/tables', 'admin.tables')->name('tables');

    Route::group(['prefix' => 'pages', 'as' => 'page.'], function () {
        // Route for managing undangan resource
        Route::resource('undangans', UndanganController::class);
        
        // Other routes
        Route::view('/404-page', 'admin.pages.404')->name('404');
        Route::view('/blank-page', 'admin.pages.blank')->name('blank');
        Route::view('/create-account-page', 'admin.pages.create-account')->name('create-account');
        Route::view('/forgot-password-page', 'admin.pages.forgot-password')->name('forgot-password');
        Route::view('/login-page', 'admin.pages.login')->name('login');
    });
});


Route::get('{nama_pengantin_pria}/{nama_pengantin_wanita}', [UndanganController::class, 'show'])->name('show');
Route::get('/{nama_pengantin_pria}/{nama_pengantin_wanita}', [UndanganController::class, 'indexPublic'])->name('undangan.index.public');
// Authentication routes
require __DIR__ . '/auth.php';
