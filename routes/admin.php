<?php
Route::namespace('Backend')->group(function () {
    Route::get('/login.html', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login.html', 'Auth\LoginController@login')->name('admin.login');
    Route::group(['middleware' => ['auth:admin']], function () {
        Route::get('/', 'HomeController@index');
    });
});
