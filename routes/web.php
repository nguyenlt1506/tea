<?php
Route::prefix('/')->group(function () {
    Route::get('/', 'Frontend\HomeController@index')->name('frontend.index');

});

Route::prefix('/admin')->group(function () {
    Route::get('/', 'Backend\HomeController@index')->name('backend.index');

});

Route::namespace('User')->group(function () {
    Route::get('/login', 'LoginController@showLoginForm');
    Route::post('/login', 'LoginController@login')->name('user.login');
    Route::group(['middleware' => ['auth']], function () {
        Route::get('/home', 'HomeController@index');
    });
});
