<?php
Route::get('/', function () {
    $courses = App\Course::all();
    return view('welcome',['courses' => $courses]);
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
    Route::post('/direct-chat/{profile}', 'DashboardController@sendDirectChat');
});

Route::prefix('admin')->group(function () {
    Route::get('dashboard', 'Admin\DashboardController@dashboard');
    Route::resource('students',	'Admin\StudentsController');
    Route::resource('courses', 'Admin\CoursesController');
    Route::resource('profile', 'Admin\ProfileController');
    Route::resource('tutors', 'Admin\TutorsController');
    Route::resource('users', 'Admin\UsersController');
    Route::resource('lectures', 'Admin\LecturesController');
    Route::resource('subscriptions', 'Admin\SubscriptionsController');
    Route::resource('chats', 'Admin\ChatsController');
    Route::resource('assignments', 'Admin\AssignmentController');
}); 