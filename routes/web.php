<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth', 'admin'])->namespace('Admin')->group(function () {
    //Speciality
    Route::get('/specialities','SpecialityController@index');
    Route::get('/specialities/create','SpecialityController@create');
    Route::get('/specialities/{speciality}/edit','SpecialityController@edit');

    Route::post('/specialities','SpecialityController@store');
    Route::put('/specialities/{speciality}','SpecialityController@update');
    Route::delete('/specialities/{speciality}','SpecialityController@destroy');



    //Doctor
    Route::resource('doctors', 'DoctorController');

    //Patient
    Route::resource('patients', 'PatientController');

});

Route::middleware(['auth', 'doctor'])->namespace('Doctor')->group(function () {
    Route::get('/schedule','ScheduleController@edit');
    Route::post('/schedule','ScheduleController@store');

});
