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
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Order::class, function (Faker\Generator $faker) {
	$a = array("四川省","南充市","顺庆区","南部县","成都市","上海市","虹口区","宝山区","南通市","江苏省");
    return [
        'address' => $a[array_rand($a)],
        'dealer' => $faker->name,
        'order_date' => $faker->date(),
        'order_status' => rand(1,4),
    ];
});