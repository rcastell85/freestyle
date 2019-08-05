<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Friend;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$factory->define(Friend::class, function (Faker $faker) {
    return [
        'user_id'=>rand(1,30),
        'friend_id'=>rand(1,30),
    ];
});
