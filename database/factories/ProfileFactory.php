<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Profile;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


$autoIncrement = autoIncrement();
$factory->define(Profile::class, function (Faker $faker)use ($autoIncrement) {
    $path = storage_path('app/public/profiles');
    $autoIncrement->next();
    return [
      'name' => $faker->name,
      'lastName'=>$faker->lastName,
      // 'gender'=>$faker->name($gender = null|'male'|'female'), preguntar a ale
      'image' => $faker->image($path, 150, 150, 'people', false),
      'user_id' => $autoIncrement->current(),



    ];
});
function autoIncrement()
{
    for ($i = 0; $i <=30; $i++) {
        yield $i;
    }
}
