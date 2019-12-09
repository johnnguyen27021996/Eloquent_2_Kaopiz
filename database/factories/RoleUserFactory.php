<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\RoleUser::class, function (Faker $faker) {
    static $user_id = 1;
    return [
        'user_id' => $user_id++,
        'role_id' => rand(1,3)
    ];
});
