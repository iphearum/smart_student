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
    // return view('welcome');
    $univer = new \App\University([
        "name_university"=>"ITC",
        "description"=>'hello world',
        "urlimage_logo"=>"logo_itc.jpg",
        "urlimage_cover"=>"cover_itc.jpg",
        "type"=>"public",
    ]);
    // $univer->save();
    // $univer = \App\University::first();
    
    // $univer->majors()->create([
    //     'name_major'=>'GGG',
    //     'description'=>'do me',
    //     'urlimage_major'=>'image_GGG_major.jpg',
    // ]);
    $major = App\Major::findOrFail(1);
    // dd($major);
    $major->subjects()->create([
        'name_subject'=>'gg',
        'description'=>'DJ kaka',
    ]);
});
