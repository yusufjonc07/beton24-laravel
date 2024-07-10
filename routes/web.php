<?php

use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkplaceControlller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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

Route::group([
    'prefix'=> 'users/',
    'as'=>'user.'
], function(){
    Route::get('profile', [UserController::class, 'profile'])->name('profile');
    Route::get('settings', [UserController::class, 'settings'])->name('settings');
    Route::get('', [UserController::class, 'index'])->name('index');
    Route::post('create', [UserController::class, 'create'])->name('create');
    Route::get('show', [UserController::class, 'settings'])->name('show');
    Route::get('fired', [UserController::class, 'settings'])->name('fired');
});



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('set-locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('set-mode/{mode}', function ($mode) {
    Session::put('mode', $mode);
    return redirect()->back();
});

Route::get('set-sidebar-size/{size}', function ($size) {
    Session::put('sidebar-size', $size);
    return redirect()->back();
});

Route::get('/workplaces', [WorkplaceControlller::class, 'index'])->middleware('auth')->name('workplace.index');
Route::post('/workplace/create', [WorkplaceControlller::class, 'create'])->middleware('auth')->name('workplace.create');
