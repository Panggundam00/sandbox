<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
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
    return view('welcome');
});



Route::get('/hello', function () {
    return route('admin.page', ['id' => 1234]) ;
}) ;

Route::get('/hello/id', function () {
    return 'hello id' ;
}) ;


Route::get('/staff/news/{id?}', function ($id=null) {
    return 'this is news ' . $id ;
})->name('staff.news') ;

//Route::get('/pages', [PagesController::class, 'index']);
//
//Route::get('/pages/{id}', [PagesController::class, 'show']);

Route::get('/account', [AccountController::class, 'index']) ;

Route::get('/pages', [PagesController::class, 'index'])->name('pages.index') ;

Route::get('/pages/{id}', [PagesController::class, 'show'])->name('pages.show');

Route::resource('/posts', PostsController::class) ;
