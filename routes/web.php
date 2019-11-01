<?php
use Faker\Generator as Faker;
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
    $univer = \App\University::findOrFail(4);

    // major
    // $univer->majors()->create([
    //     'name_major'=>'GGG',
    //     'description'=>'do me',
    //     'urlimage_major'=>'image_GGG_major.jpg',
    //     'type_major'=>'engineer'
    // ]);
    // $a = $univer->majors->where('name_major','GIC');
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
    // for($i=0;$i<10;$i++){
    //     $name = Str::random(4);
    //     $user = new App\User([
    //         'name' => $name,
    //         'email' => $name.'@gmail.com',
    //         'email_verified_at' => now(),
    //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
    //         'remember_token' => Str::random(10),
    //     ]);
    //     // $user->save();
    // }

    // $name_location = ['Phnom Penh','Kampot','Kandal','Kampong Cham'];
    // $lat = rand(10000000,99999999)/100000000+11;
    // $lng = rand(10000000,99999999)/100000000+104;
    // DB::table('location')->insert([
    //     'name_location'=>$name_location[rand(0,3)],
    //     'latitute'=>$lat,
    //     'longitute'=>$lng,
    //     'type'=>'test',
    //     'universities_id'=>$univer->id
    // ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
