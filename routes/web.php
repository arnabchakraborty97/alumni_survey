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
Route::resource('surveys', 'SurveyController');

// Departments
Route::resource('departments', 'DepartmentController');