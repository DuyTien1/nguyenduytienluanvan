<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Index
Route::get('/', 'AdminController@index');
Route::get('/dashboard', 'AdminController@dashboard');
Route::get('/admin', 'AdminController@index');
Route::get('/logout', 'AdminController@logout');

// Admin
Route::get('/toeditadmin/{adminid}', 'AdminController@toeditadmin');
Route::get('/toresetpass/{adminid}', 'AdminController@toresetpass');
Route::post('/resetpass/{adminid}', 'AdminController@resetpass');
Route::post('/admin_login', 'AdminController@login');
Route::post('/updateadmin/{adminid}', 'AdminController@updateadmin');

// Checkin
Route::get('/tocheckin/{classid}', 'AdminController@tocheckin');
Route::get('/deletecheckin', 'ClassController@deletecheckin');

// Sign in
Route::get('/signin', 'AdminController@signin');
Route::get('/deletesignin/{tempid}', 'AdminController@deletesignin');
Route::get('/sendupdate/{temp_id}', 'AdminController@sendupdate');
Route::post('/update/{temp_id}', 'AdminController@update');

// Classroom
Route::get('/tolistclassroom', 'ClassroomController@tolistclassroom');
Route::get('/toaddclassroom', 'ClassroomController@toaddclassroom');
Route::get('/toeditclassroom/{classroomid}', 'ClassroomController@toeditclassroom');
Route::get('/deleteclassroom/{classroomid}', 'ClassroomController@deleteclassroom');
Route::post('/addclassroom', 'ClassroomController@addclassroom');
Route::post('/updateclassroom/{classroomid}', 'ClassroomController@updateclassroom');

// Subject
Route::get('/tolistsubject', 'SubjectController@tolistsubject');
Route::get('/toaddsubject', 'SubjectController@toaddsubject');
Route::get('/toeditsubject/{subjectid}', 'SubjectController@toeditsubject');
Route::get('/deletesubject/{subjectid}', 'SubjectController@deletesubject');
Route::post('/addsubject', 'SubjectController@addsubject');
Route::post('/updatesubject/{subjectid}', 'SubjectController@updatesubject');

// Shift
Route::get('/tolistshift', 'ShiftController@tolistshift');
Route::get('/toaddshift', 'ShiftController@toaddshift');
Route::get('/toeditshift/{shiftid}', 'ShiftController@toeditshift');
Route::get('/deleteshift/{shiftid}', 'ShiftController@deleteshift');
Route::post('/addshift', 'ShiftController@addshift');
Route::post('/updateshift/{shiftid}', 'ShiftController@updateshift');

// Student
Route::get('/toliststudent', 'StudentController@toliststudent');
Route::get('/toeditstudent/{studentid}', 'StudentController@toeditstudent');
Route::get('/deletestudent/{studentid}', 'StudentController@deletestudent');
Route::post('/addstudent', 'StudentController@addstudent');
Route::post('/updatestudent/{studentid}', 'StudentController@updatestudent');

// Class
Route::get('/tolistclass', 'ClassController@tolistclass');
Route::get('/tolistonline', 'ClassController@tolistonline');
Route::get('/toaddclass', 'ClassController@toaddclass');
Route::get('/toeditclass/{classid}', 'ClassController@toeditclass');
Route::get('/deleteclass/{classid}', 'ClassController@deleteclass');
Route::post('/addclass', 'ClassController@addclass');
Route::post('/updateclass/{classid}', 'ClassController@updateclass');

// Class detail
Route::get('/tolistclassdetail/{classid}', 'ClassController@tolistclassdetail');
Route::get('/toaddclassdetail/{classid}', 'ClassController@toaddclassdetail');
Route::post('/addclassdetail/{classid}', 'ClassController@addclassdetail');
Route::post('/deleteclassdetail/{classid}', 'ClassController@deleteclassdetail');

// Anonymous
Route::get('/tolistanonymous', 'AdminController@tolistanonymous');
Route::get('/movetosignin/{anonymousid}', 'AdminController@movetosignin');
Route::get('/deleteanonymous/{anonymousid}', 'AdminController@deleteanonymous');

// Print
Route::get('/printlog', 'ClassController@printlog');


