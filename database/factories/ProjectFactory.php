<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Project;
use Faker\Generator as Faker;

$factory->define(Project::class, function (Faker $faker) {
	 $user_ids = App\User::pluck('id');
	 
    return [
        'name' => $faker->text(50),
        'description' => $faker->text(200),
        'owner_id' => $user_ids->random(),
    ];
});
