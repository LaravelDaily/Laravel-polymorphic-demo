<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Photo::class, function (Faker\Generator $faker) {
    $models = ['App\Post', 'App\Product'];
    return [
        'imageable_id' => rand(1,10),
        'imageable_type' => $models[rand(0,1)],
        'filename' => $faker->word . '.png'
    ];
});
