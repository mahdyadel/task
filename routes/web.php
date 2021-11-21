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

Route::prefix('admin')->name('dashboard.')->group(function() {

                //route dashboard

                Route::get('/', 'Dashboard\WelcomController@index')->name('welcome');

                //route tasks
                Route::resource('tasks', 'Dashboard\TaskController')->except(['show']);

                // route brand
                Route::resource('brands', 'Dashboard\BrandController')->except(['show']);

                //route datadtable get
                Route::get('brands-datatable', 'Dashboard\BrandController@dataTable')->name('brand.datatable');


                 
                

                    //route tiodo modal
                Route::resource('todo', 'Dashboard\TodoController')->except(['show']);


               
               
            });


});





