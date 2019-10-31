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
    // $univer = new \App\University([
    //     "name_university"=>"AEU",
    //     "description"=>'hello world',
    //     "urlimage_logo"=>"logo_AEU.jpg",
    //     "urlimage_cover"=>"cover_AEU.jpg",
    //     "type"=>"public",
    // ]);
    // $univer->save();
    $univer = \App\University::first();
    

    // major
    // $univer->majors()->create([
    //     'name_major'=>'GGG',
    //     'description'=>'do me',
    //     'urlimage_major'=>'image_GGG_major.jpg',
    //     'type_major'=>'engineer'
    // ]);
    $a = $univer->majors->where('name_major','GIC');
    echo $a->id;
    // dd($univer);
    // $major = App\Major::findOrFail(1);
    // dd($major);

    // subject
    // $major->subjects()->create([
    //     'name_subject'=>'gg',
    //     'description'=>'DJ kaka',
    // ]);
    // dd($univer->majors->where('id',1));
    // dd($major->subjects);

});
