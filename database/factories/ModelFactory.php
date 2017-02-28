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

$factory->define(Wx\Loan\Apply::class, function (Faker\Generator $faker) {
    return [
        'profession' => (string)mt_rand(1, 3),
        'id_num' => $faker->creditCardNumber,
        'address' => $faker->address,
        'amount' => $faker->randomNumber,
        'worked_since' => $faker->date(),
        'paid_by' => $faker->word,
        'yanglaobaoxian' => $faker->word,
        'gongjijin' => $faker->word,
        'qitabaoxian' => $faker->word,
        'fangchan' => $faker->word,
        'shenyileixin' => $faker->word,
        'jinyinshijian' => $faker->word,
        'nianyinyee' => $faker->word,
        'gerenzhangu' => $faker->word,
        'address' => $faker->address,
        'salary' => $faker->numberBetween('2000', '50000'),
        'turnover' => $faker->numberBetween('20000', '5000000'),
        'amount' => $faker->numberBetween('2000', '500000'),
        'status' => (string)mt_rand(1, 3),

    ];
});