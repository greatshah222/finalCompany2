<?php



Route::get('/donate','DonateController@index')->name('donate');

Route::post('/store-payment','DonateController@storePayment')->name('payment.store');
Route::get('/pay-with-paypal','DonateController@payWithPaypal')->name('payment.paypal');
Route::get('/','FrontController@index')->name('name');
Route::get('/contact','FrontController@getContact');
Route::post('contactme', 'FrontController@postContactme');

Route::post('subscribe', 'FrontController@subscribe');






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
// comments
 Route::post('comments/{post_id}','CommentsController@store')->name('comments.store');

Route::get('comments/{id}/edit','CommentsController@edit')->name('comments.edit');
Route::get('comments/{id}/delete','CommentsController@delete')->name('comments.delete');


Route::put('comments/{id}','CommentsController@update')->name('comments.update');
Route::delete('comments/{id}','CommentsController@destroy')->name('comments.destroy');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/settings','SettingsController@index')->name('settings');
    Route::post('/settings/update','SettingsController@update')->name('settings.update');



});




Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');





