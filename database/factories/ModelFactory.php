<?php

use Faker\Generator as Faker;
use App\Models\User;

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
    static $password;
    static $phone_password;

    return [
            'username' => $faker->userName,
            'password' => $password ?: $password = bcrypt('123456'),
            'full_name' => $faker->name." ".$faker->lastName,
            'phone_login' => 123456,
            'phone_password' => $phone_password ?: $phone_password = bcrypt('123456'),
            'level_id' => $faker->numberBetween(1,9),
            'group_id' => 1,
            'time_keeper_user_id' => null,
    ];
});
