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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


$factory->define(App\Project::class, function (Faker\Generator $faker) {

    return [
        'project_name' => $faker->sentence,
        'budget'       => $faker->randomNumber
    ];
});


$factory->define(App\Expense::class, function (Faker\Generator $faker) {

    return [
        'expense_name'              => $faker->sentence,
        'expense_description'       => $faker->paragraph,
        'expense_amount'            => $faker->randomNumber,
        'project_id'                => 1
    ];
});
