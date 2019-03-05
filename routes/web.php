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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/',function (){
    return view('index');
})->name('index');

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth']], function () {

	Route::get('/dashboard','DasboardController@dashboard')->name('dashboard');
    Route::resource('course','CourseController');
    Route::post('/deletecourse','CourseController@deletecourse');

    //batch related Route
    Route::resource('batch','BatchController');
    Route::post('/deleteBatch','BatchController@deleteBatch');

    //student Related route
    Route::get('student','StudentController@index')->name('student.index');
    Route::get('student/create','StudentController@create')->name('student.create');
    Route::get('get-state-list','StudentController@getStateList');
    Route::post('student/store','StudentController@store')->name('student.store');
    Route::get('student/edit/{id}','StudentController@edit')->name('student.edit');
    Route::put('student/update/{id}','StudentController@update')->name('student.update');
    Route::post('/deleteStudent','StudentController@delete');
    Route::get('/student/search', 'StudentController@indexstudentInformationSearch')->name('searchStudent');








    
    //    Investment
    Route::resource('investment','InvestmentController');
    Route::post('/deleteInvestment','InvestmentController@deleteInvestor');


    //    Project
    Route::resource('project','ProjectController');
    Route::post('/deleteProject','ProjectController@deleteProject');


    //    testimonial
    Route::resource('testimonial','TestimonialController');
    Route::post('/deleteTestimonial','TestimonialController@deletetestimonial');








});
