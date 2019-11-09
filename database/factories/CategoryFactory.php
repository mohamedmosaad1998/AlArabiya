<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */


use Faker\Generator as Faker;

$factory->define(App\Models\Category::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'active'=>$faker->boolean(),
        'orderBy'=>$faker->unique()->numberBetween(1,1000),
        'image'=>'1563223417.png'
    ];
});
