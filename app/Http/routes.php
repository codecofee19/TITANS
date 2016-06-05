<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

    Route::get('question1', 'QuizController@question1');

    Route::get('question2', 'QuizController@question2');

    Route::get('question3', 'QuizController@question3');

    Route::get('question4', 'QuizController@question4');

    Route::get('question5', 'QuizController@question5');

    Route::get('question6', 'QuizController@question6');

    Route::get('question7', 'QuizController@question7');

    Route::resource('student', 'StudentController');

    Route::resource('mentor', 'MentorController');

    Route::resource('school', 'SchoolController');

    Route::resource('quiz', 'QuizController');

