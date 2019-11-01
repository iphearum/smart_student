<?php
$name_uni = [
    'RUPP',
    'ITC',
    'NTTI',
    'IU',
    'NU',
    'NUM',
    'UHS',
];
for ($i = 0; $i < 6; $i++) {
    $univer = new \App\University([
        "name_university" => $name_uni[$i],
        "description" => "I can only assume that PHP sorts the array as elements are added to make it easier for it to find a specified element by its key later. In many cases it won't matter if the array is not stored internally in the same order you added the elements, but if, for instance, you execute a foreach on the array later, the elements may not be processed in the order you need them to be.",
        "urlimage_logo" => "logo_AEU.jpg",
        "urlimage_cover" => "cover_AEU.jpg",
        "type" => "public",
    ]);
    $univer->save();
    //  major
    $majors = [
        'GCI',
        'GIC',
        'GGG',
        'GEE',
        'GCA',
        'GRU',
        'OAC',
    ];
    $ran = rand(0,5);
    for ($i = 0; $i < $ran; $i++) {
        $univer->majors()->create([
            'name_major' => $majors[$i],
            'description' => "I can only assume that PHP sorts the array as elements are added to make it easier for it to find a specified element by its key later. In many cases it won't matter if the array is not stored internally in the same order you added the elements, but if, for instance, you execute a foreach on the array later, the elements may not be processed in the order you need them to be.",
            'urlimage_major' => 'image_' . $majors[$i] . '_major.jpg',
            'type_major' => 'engineer'
        ]);
        $major = App\Major::findOrFail($i);
        //  subject
        $name_m = [
            'Mathemathic',
            'Physical',
            'Chimical',
            'Philosophy',
            'Maketing',
            'Account',
            'Management',
        ];
        $n = rand(0, 3);
        for ($j = 0; $j < $n; $j++) {
            $major->subjects()->create([
                'name_subject' => $name_m[$j],
                'description' => "I can only assume that PHP sorts the array as elements are added to make it easier for it to find a specified element by its key later. In many cases it won't matter if the array is not stored internally in the same order you added the elements, but if, for instance, you execute a foreach on the array later, the elements may not be processed in the order you need them to be.",
            ]);
        }
        $name_location = ['Phnom Penh', 'Kampot', 'Kandal', 'Kampong Cham'];
        $lat = rand(10000000, 99999999) / 100000000 + 11;
        $lng = rand(10000000, 99999999) / 100000000 + 104;
        DB::table('location')->insert([
            'name_location' => $name_location[rand(0, 3)],
            'latitute' => $lat,
            'longitute' => $lng,
            'type' => 'test',
            'universities_id' => $univer->id
        ]);
    }
}
// $univer = \App\University::findOrFail(4);


// $a = $univer->majors->where('name_major', 'GIC');
// dd($univer);
// $major = App\Major::findOrFail(1);
// // dd($major);

// //  subject
// $major->subjects()->create([
//     'name_subject' => 'gg',
//     'description' => 'DJ kaka',
// ]);
// dd($univer->majors->where('id', 1));
// dd($major->subjects);
for ($i = 0; $i < 10; $i++) {
    $name = Str::random(4);
    $user = new App\User([
        'name' => $name,
        'email' => $name . '@gmail.com',
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',  //password
        'remember_token' => Str::random(10),
    ]);
    $user->save();
}

// $name_location = ['Phnom Penh', 'Kampot', 'Kandal', 'Kampong Cham'];
// $lat = rand(10000000, 99999999) / 100000000 + 11;
// $lng = rand(10000000, 99999999) / 100000000 + 104;
// DB::table('location')->insert([
//     'name_location' => $name_location[rand(0, 3)],
//     'latitute' => $lat,
//     'longitute' => $lng,
//     'type' => 'test',
//     'universities_id' => $univer->id
// ]);
