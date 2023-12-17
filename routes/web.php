<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::group(['middleware'=>'web'], function (){
    Route::match(['get','post'],'/',[IndexController::class, 'execute'])->name('home');
    Route::get('/page/ {alias}', ['uses'=>'PageController@execute'])->name('page');
    Auth::routes();
});

Route::group(['prefix'=>'admin','middleware'=>'auth' ], function (){
    Route::get('/', function(){

    })->name('');

    Route::group(['prefix'=>'pages'], function (){
        Route::get('/', ['uses'=>'PagesController@execute'])->name('pages');
        Route::match(['get', 'post'],'/add',['uses'=>'PagesAddController@execute'])->name('pagesAdd');
        Route::match(['get', 'post', 'delete'],'/edit/{page}',['uses'=>'PagesEditController@execute'])
            ->name('pagesEdit');

    });

    Route::group(['prefix'=>'portfolios'], function (){
        Route::get('/', ['uses'=>'PortfolioController@execute'])->name('portfolios');
        Route::match(['get', 'post'],'/add',['uses'=>'PortfolioAddController@execute'])->name('PortfolioAdd');
        Route::match(['get', 'post', 'delete'],'/edit/{Portfolio}',['uses'=>'PortfolioEditController@execute'])
            ->name('PortfolioEdit');
    });

    Route::group(['prefix'=>'services'], function (){
        Route::get('/', ['uses'=>'ServiceController@execute'])->name('services');
        Route::match(['get', 'post'],'/add',['uses'=>'ServiceAddController@execute'])->name('ServiceAdd');
        Route::match(['get', 'post', 'delete'],'/edit/{Service}',['uses'=>'ServiceEditController@execute'])
            ->name('ServiceEdit');
    });


});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
