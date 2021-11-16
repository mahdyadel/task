<?php

use Illuminate\Support\Facades\Route;

// ns the "web" middleware group. Now create something great!


Auth::routes();

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {

        

Route::get('/home', 'HomeController@index')->name('home');



});

Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']],
    function () {

Route::prefix('admin')
                ->name('dashboard.')
            ->group(function() {
                Route::get('/', 'Dashboard\WelcomController@index')->name('welcome');

                Route::resource('tasks', 'Dashboard\TaskController')->except(['show']);
                ;
            });


});





