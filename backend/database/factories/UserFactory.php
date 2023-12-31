<?php

use App\Models\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use MikeMcLin\WpPassword\Facades\WpPassword;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'nickname' => $faker->name,
        'display_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => WpPassword::make('secret') // '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
    ];
});
