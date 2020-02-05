<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Illuminate\Support\Str;
use App\Model;
use Faker\Generator as Faker;
use App\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => 'product'.Str::random(3),
        'price' => rand(1,100),
        'expired' => '2019-09-09',
        'description' => 'Bánh đậu xanh Hải Dương',
        'img' => '',
        'quantity' => rand(1,50),

        //
    ];
});
