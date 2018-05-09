<?php





Route::get('/','FrontController@index')->name('name');

Auth::routes();
Route::prefix('manage')->group(function (){
    Route::get('/','ManageController@index');
    Route::get('/dashboard','ManageController@dashboard')->name('manage.dashboard');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');




