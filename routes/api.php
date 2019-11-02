<?php

use App\University;
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

Route::group([
    'namespace' => 'API'
], function () {
    Route::post('/university','UniversityController@store');
    Route::put('/university','UniversityController@store');
    Route::delete('/university/{id}','UniversityController@destroy');
    Route::get('/university', 'UniversityController@all');
    Route::get('/university/{id}', 'UniversityController@index');
    Route::get('/university/{u_id}/major', 'UniversityController@univerToMajor');

    //major
    Route::post('/major','MajorController@store');
    Route::put('/major','MajorController@store');
    Route::delete('/major/{id}','MajorController@destroy');
    Route::get('/major', 'MajorController@all');
    Route::get('/major/{id}', 'MajorController@index');
    Route::get('/major/{m_id}/subject{s_id}', 'MajorController@majorToSubject');
    Route::get('/major/{m_id}/university', 'MajorController@majorToUniversity');

    //Subject
    Route::post('/subject','SubjectController@store');
    Route::put('/subject','SubjectController@store');
    Route::delete('/subject/{id}','SubjectController@destroy');
    Route::get('/subject', 'SubjectController@all');
    Route::get('/subject/{s_id}', 'SubjectController@index');
    Route::get('/subject/{s_id}/major', 'SubjectController@subjectToMajor');
    // type
    Route::get('/type_university/{input}', 'UniversityController@syncToType');

    // info university
    Route::post('/info','InfoController@store');
    Route::put('/info','InfoController@store');
    Route::delete('/info/{id}','InfoController@destroy');
    Route::get('/info/{u_id}', 'InfoController@index');

    // Route::get('/university/{itc}/major/{id_it}/subject/{id_subject}','UniversityController@majorHasSubject');//{uni}{major}{sub}
    // Route::put('/university/update/{}','UniversityController@index')->name('university.index');
        
        // CRUD api
    });
Route::group([
    'namespace'=>'Auth'
],function(){
    Route::get('/login','LoginController@api_login');
});
