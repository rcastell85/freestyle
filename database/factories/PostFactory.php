<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

$autoIncremen = autoIncremen();
$factory->define(Post::class, function (Faker $faker)use ($autoIncremen) {
    $path = storage_path('app/public/PostImg');
    $autoIncremen->next();
    return [
      'title' => $faker->realText($maxNbChars = 15, $indexSize = 2),
      'author'=>$faker->lastName,

      'image' => $faker->image($path,640,480,'cats',false),
      'user_id' => $autoIncremen->current(),



    ];
});
function autoIncremen()
{
    for ($i = 0; $i <=30; $i++) {
        yield $i;
    }
};
