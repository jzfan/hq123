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
        'real_name' => $faker->name,
        'city' => $faker->city,
        'email' => $faker->unique()->safeEmail,
        'phone' => (string) mt_rand(13000000000, 18999999999),
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'openid' => str_random(22),
        'api_token' => str_random(60),
        'role' => (string)mt_rand(2, 3),
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

$factory->define(Wx\Loan\Car::class, function (Faker\Generator $faker) {
    return [
        'brand' => $faker->company,
        'plate_number' => $faker->ean8,
        'bought_at' => $faker->dateTime(),
        'paid_by' => $faker->creditCardType,
        'duration' => mt_rand(1, 22),
        'loan' => mt_rand(1, 100) * 10000,
        'status' => (string)mt_rand(1, 3),
    ];
});

$factory->define(Wx\Loan\House::class, function (Faker\Generator $faker) {
    return [
        'bought_at' => $faker->dateTime(),
        'paid_by' => $faker->creditCardType,
        'assess' => mt_rand(1, 100) * 10000,
        'duration' => mt_rand(1, 22),
        'loan' => mt_rand(1, 100) * 10000,
        'status' => (string)mt_rand(1, 3),
    ];
});

$factory->define(Wx\Loan\Fund::class, function (Faker\Generator $faker) {
    return [
        'company' => $faker->company,
        'location' => $faker->address,
        'worked_at' => $faker->dateTime(),
        'insurance' => mt_rand(10000, 999999),
        'fund' => mt_rand(10000, 999999),
        'duration' => mt_rand(1, 22),
        'loan' => mt_rand(1, 100) * 10000,
        'status' => (string)mt_rand(1, 3),
    ];
});

$factory->define(Wx\Loan\Business::class, function (Faker\Generator $faker) {
    return [
        'company' => $faker->company,
        'house' => $faker->address,
        'registered_at' => $faker->dateTime(),
        'share' => mt_rand(1, 100),
        'annual_turnover' => mt_rand(1, 100) * 10000,
        'loan' => mt_rand(1, 100) * 10000,
        'duration' => mt_rand(1, 44),
        'status' => (string)mt_rand(1, 3),
    ];
});