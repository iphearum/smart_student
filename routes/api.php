<?php

use App\Http\Controllers\UniversityController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/university', 'UniversityController@all');
Route::get('/university/{}', 'UniversityController@index');
Route::get('/university/{}/major/{}', 'UniversityController@univerToMajor');

//major
Route::get('/major', 'MajorController@all');
Route::get('/major/{}', 'MajorController@index');
Route::get('/major/{}/subject{}', 'MajorController@majorToSubject');
Route::get('/major/{}/university', 'MajorController@majorToUniversity');

//Subject
Route::get('/subject','SubjectController@all');
Route::get('/subject/{}','SubjectController@index');
Route::get('/subject/{}/major','SubjectController@subjectToMajor');

// Route::get('/university/{itc}/major/{id_it}/subject/{id_subject}','UniversityController@majorHasSubject');//{uni}{major}{sub}
// Route::put('/university/update/{}','UniversityController@index')->name('university.index');
