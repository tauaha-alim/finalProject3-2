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



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('index');

//Route::get('/',function (){
  //  return view('index');
//})->name('index');


Route::get('chatApps','ChatController@chat');
Route::post('send','ChatController@send');



Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function () {

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

      Route::get('/projectSearch/search', 'ProjectController@projectSearch')->name('projectSearch');

    


    //    testimonial
    Route::resource('testimonial','TestimonialController');
    Route::post('/deleteTestimonial','TestimonialController@deletetestimonial');



    //chart
    Route::get('/chart', 'ChartController@index')->name('chart');
    Route::get('/chart/{year}', 'ChartController@GetYearlyBalanceSheet');

    Route::get('/payment_chart', 'ChartController@student_chart')->name('student_chart');
    Route::get('/payment_chart/{year}', 'ChartController@student_chart_year');

    
     Route::get('/investment_chart', 'ChartController@investor_chart')->name('investor_chart');
    Route::get('/investment_chart/{year}', 'ChartController@investor_chart_year');



});
Route::group(['as'=>'admin.','prefix'=>'admin','middleware'=>['auth','admin']], function () {
    
    Route::get('chatApps','ChatController@chat')->name('chatApps');
    Route::post('send','ChatController@send')->name('send');
   


    });

Route::group(['prefix'=>'admin','namespace'=>'Auth','middleware'=>['auth','admin']], function () {
    
    
   
         Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'RegisterController@register');

    });


Route::group(['as'=>'customer.','prefix'=>'customer','middleware'=>['auth','customer']], function () {
    Route::get('/customerlogged', 'HomeController@store')->name('index');
        Route::get('chatApps','ChatController@chat')->name('chatApps');
    Route::post('send','ChatController@send')->name('send');

    });



Route::resource('pages','PagesController');

Route::post('/passGate','PagesController@LoginPassGate')->name('loginPassGateRoute');

Route::get('/destroyLoggedMan','PagesController@loggedManDestroy')->name('destroyLoggedMan');

//Route::get('/liveChatPage','PagesController@liveChatPage')->name('liveChatPage');