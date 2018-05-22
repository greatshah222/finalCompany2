<?php





Route::get('/','FrontController@index')->name('name');

Auth::routes();
Route::prefix('manage')->middleware('role:superadministrator|administrator|editor|author|contributor')->group(function (){
    Route::get('/','ManageController@index');
    Route::get('/dashboard','ManageController@dashboard')->name('manage.dashboard');
    Route::resource('/users','UserController');
});
Route::resource('posts','PostController');


Route::group(['middleware' => 'auth'], function () {
    Route::get('blog/{slug}','BlogController@getSingle')->name('blog.single')->where('slug','[\w\d\-\_]+');
    Route::get('blog','BlogController@getIndex')->name('blog.index');

});

Route::resource('categories','CategoryController',['except'=>['create']]);
Route::resource('tags','TagController',['except'=>['create']]);



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');




