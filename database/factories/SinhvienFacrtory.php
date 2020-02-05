<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Sinhvien::class, function (Faker $faker) {
    return [
        'hoten' => 'Nguyen Van A'.Str::random(2),
        'masv' => '20141091'.Str::random(2),
        'ngaysinh'=> '1996-08-08',
        'diachi' => 'Ha Noi'.Str::random(2),
        'sodt' => '123456'.rand(1,20),
        //
    ];
});
