<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Monhoc::class, function (Faker $faker) {
    return [
        'tenmonhoc' => 'Giai tich '.Str::random(2),
        'mamon' => 'GT'.Str::random(1),
        'sotinchi' => '3'
        //
    ];
});
