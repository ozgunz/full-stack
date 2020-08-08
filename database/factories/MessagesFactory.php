<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Messages;
use Faker\Generator as Faker;

$factory->define(Messages::class, function (Faker $faker) {
    return [
        'subject'   =>  $faker->realText(30),
        'content'   =>  $faker->text(),
        'is_read'   =>  false,
        'user_id'   =>  0
    ];
});
