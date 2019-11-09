<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Course;
use Faker\Generator as Faker;

$factory->define(Course::class, function (Faker $faker) {
    return [
        'title'=>$faker->title,
        'description'=>$faker->text,
        'startDate'=>$faker->date(),
        'active'=>$faker->boolean(),
        'image'=>'1563223417.png',
        'user_id'=>factory(\App\User::class)->create(),
        'category_id'=>factory(\App\Models\Category::class)->create(),
    ];
});
