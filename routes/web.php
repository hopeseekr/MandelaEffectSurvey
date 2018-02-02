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
    $data = [];
    if (!empty($_GET['questionAdded'])) {
        $data['questionAdded'] = true;
    }

    return view('welcome', $data);
});

Route::post('/survey/question', 'SurveyQuestionController@store');
Route::get('/survey/section/{sectionId}', 'SurveySectionController@show');
