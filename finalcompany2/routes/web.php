<?php



Route::get('test',function ()
{
 return App\Profile::find(1)->user;
});

Route::get('/','FrontController@index')->name('name');

Auth::routes();
Route::prefix('manage')->middleware('admin')->group(function (){

    Route::get('/','ManageController@index');
    Route::get('/dashboard','ManageController@dashboard')->name('manage.dashboard');
    Route::resource('/users','UserController');

    Route::get('/users/admin/{id}','UserController@admin')->name('users.admin');
    Route::get('/users/not-admin/{id}','UserController@not_admin')->name('users.not.admin');




});
Route::resource('/profile','ProfilesController');

Route::get('posts/trashed','PostController@trashed')->name('posts.trashed');
Route::get('posts/kill/{id}','PostController@kill')->name('posts.kill');
Route::get('posts/restore/{id}','PostController@restore')->name('posts.restore');



Route::resource('posts','PostController');


Route::group(['middleware' => 'auth'], function () {
    Route::get('blog/{slug}','BlogController@getSingle')->name('blog.single')->where('slug','[\w\d\-\_]+');
    Route::get('blog','BlogController@getIndex')->name('blog.index');

});

Route::resource('categories','CategoryController',['except'=>['create']]);
Route::resource('tags','TagController',['except'=>['create']]);



Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');





