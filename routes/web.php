<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdminController;
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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' , 'auth' ]
    ], function(){
        Route::group([
            'middleware'=>['is_admin']
        ],function(){
            Route::get('/dashboard', [AdminController::class , 'index'])->name('dashboard');

            Route::resource('/categories', CategoryController::class);
        });
    });


    Route::get('/', function () {
        return view('welcome');
    });



    /* Route::get('/copy', function () {
        return view('admin.copy');
    }); */
