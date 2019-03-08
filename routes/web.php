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

Route::get('/', 'HomeController@index')->name('dashboard');

Auth::routes();

// Questions
Route::resource('questions', 'QuestionController');

// Answers
Route::resource('answers', 'AnswerController');

// Surveys
Route::get('surveys/exitCreate', 'SurveyController@exitCreate')->name('surveys.exitCreate');
Route::post('surveys/exitPost', 'SurveyController@exitStore')->name('surveys.exitStore');
Route::get('surveys/showExit/{survey}', 'SurveyController@exitShow')->name('surveys.exitShow');
Route::get('surveys/employerCreate', 'SurveyController@employerCreate')->name('surveys.employerCreate');
Route::post('surveys/employerPost', 'SurveyController@employerStore')->name('surveys.employerStore');
Route::get('surveys/showEmployer/{survey}', 'SurveyController@employerShow')->name('surveys.employerShow');
Route::resource('surveys', 'SurveyController');


// Departments
Route::resource('departments', 'DepartmentController');