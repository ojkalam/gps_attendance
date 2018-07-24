<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('admin')->user();

    //dd($users);

    return view('admin.home');
})->name('home');


  Route::get('/', function(){

  		return redirect('admin/home');

  });
  Route::resource('/subject', 'SubjectController');

  Route::resource('/batch', 'BatchController');

  Route::resource('/assigned_class', 'AssignedTaskController');

  Route::get('/teachers', 'HomeController@showTeachers');