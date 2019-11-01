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
    // $major = App\Major::find('university_id',4);
    // dd($major);
    echo $univer->id;

    // university
    // $name_uni = [
    //     'RUPP',
    //     'ITC',
    //     'NTTI',
    //     'IU',
    //     'NU',
    //     'NUM',
    //     'UHS',
    // ];
    // for ($i = 0; $i < 6; $i++) {
    //     $univer = new \App\University([
    //         "name_university" => $name_uni[$i],
    //         "description" => "I can only assume that PHP sorts the array as elements are added to make it easier for it to find a specified element by its key later. In many cases it won't matter if the array is not stored internally in the same order you added the elements, but if, for instance, you execute a foreach on the array later, the elements may not be processed in the order you need them to be.",
    //         "urlimage_logo" => "logo_$name_uni[$i].jpg",
    //         "urlimage_cover" => "cover_$name_uni[$i].jpg",
    //         "type" => "public",
    //     ]);
    //     $univer->save();
    //     //  major
    //     $majors = [
    //         'GCI',
    //         'GIC',
    //         'GGG',
    //         'GEE',
    //         'GCA',
    //         'GRU',
    //         'OAC',
    //     ];
    //     $ran = rand(0,5);
    //     for ($j = 0; $j < $ran; $j++) {
    //         $univer->majors()->create([
    //             'name_major' => $majors[$j],
    //             'description' => "I can only assume that PHP sorts the array as elements are added to make it easier for it to find a specified element by its key later. In many cases it won't matter if the array is not stored internally in the same order you added the elements, but if, for instance, you execute a foreach on the array later, the elements may not be processed in the order you need them to be.",
    //             'urlimage_major' => "image_$majors[$j]_major.jpg",
    //             'type_major' => 'engineer'
    //         ]);
    //         $major = App\Major::findOrFail($j);
    //         //  subject
    //         $name_m = [
    //             'Mathemathic',
    //             'Physical',
    //             'Chimical',
    //             'Philosophy',
    //             'Maketing',
    //             'Account',
    //             'Management',
    //         ];
    //         $n = rand(0, 3);
    //         for ($k = 0; $k < $n; $k++) {
    //             $major->subjects()->create([
    //                 'name_subject' => $name_m[$k],
    //                 'description' => "I can only assume that PHP sorts the array as elements are added to make it easier for it to find a specified element by its key later. In many cases it won't matter if the array is not stored internally in the same order you added the elements, but if, for instance, you execute a foreach on the array later, the elements may not be processed in the order you need them to be.",
    //             ]);
    //         }
    //         $name_location = ['Phnom Penh', 'Kampot', 'Kandal', 'Kampong Cham'];
    //         $lat = rand(10000000, 99999999) / 100000000 + 11;
    //         $lng = rand(10000000, 99999999) / 100000000 + 104;
    //         DB::table('location')->insert([
    //             'name_location' => $name_location[rand(0, 3)],
    //             'latitute' => $lat,
    //             'longitute' => $lng,
    //             'type' => 'test',
    //             'universities_id' => $univer->id
    //         ]);
    //     }
    // }
    // // user
    // for ($h = 0; $h < 10; $h++) {
    //     $name = Str::random(4);
    //     $user = new App\User([
    //         'name' => $name,
    //         'email' => $name . '@gmail.com',
    //         'email_verified_at' => now(),
    //         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',  //password
    //         'remember_token' => Str::random(10),
    //     ]);
    //     $user->save();
    // }
    // dd($univer);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
