<?php

Route::get('/', 'StaffController@index');
Route::get('home', 'StaffController@index');

Route::resource('student', 'UserResource');
Route::resource('department', 'DepartmentResource');
Route::resource('attendance', 'AttendanceResource');