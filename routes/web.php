<?php

Route::get('/', function () {
    return view('welcome');
    // return redirect('/home');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', function(){
    return redirect('/dashboard');
})->name('home');

Route::prefix('courses')->group(function () {
    Route::get('/course/{course}/detail', 'CoursesController@courseDetails');
});

Route::prefix('dashboard')->group(function () {
    Route::get('/', 'DashboardController@index');
    Route::get('/contacts', 'DashboardController@contacts');
    Route::get('/calender', 'DashboardController@calender');
    Route::get('/records/{student}', 'DashboardController@records');
    Route::get('/direct-chat/{profile}', 'DashboardController@directChat');
});

Route::prefix('admin')->group(function () {
    Route::resource('students',	'Admin\StudentsController');
    Route::get('dashboard', 'Admin\DashboardController@dashboard');
    Route::resource('courses', 'Admin\CoursesController');
    Route::resource('profile', 'Admin\ProfileController');
    Route::resource('users', 'Admin\UsersController');
    Route::resource('lectures', 'Admin\LecturesController');
    Route::resource('subscriptions', 'Admin\SubscriptionsController');
}); 