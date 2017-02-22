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
$factory->define(Wx\User\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'phone' => (string) mt_rand(13000000000, 18999999999),
        'status' => mt_rand(0, 2),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Wx\File\File::class, function (Faker\Generator $faker) {
   $path = $faker->image(public_path() . '/images/fake', $width = 110, $height = 110);
   $arr = explode('/', $path);
   $filename = array_pop($arr);
    return [
        'path' => '/images/fake/' . $filename

    ];
});

$factory->define(Wx\Loan\Loan::class, function (Faker\Generator $faker) {
    return [
        'id_num' => $faker->creditCardNumber,
        'address' => $faker->address,
        'amount' => $faker->randomNumber/100

    ];
});