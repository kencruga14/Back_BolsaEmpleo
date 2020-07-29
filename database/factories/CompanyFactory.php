<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Company::class, function (Faker $faker) {
    $user_id = $faker->biasedNumberBetween($min = 1, $max = 100, $function = 'sqrt');
    $identity = $faker->randomNumber($nbDigits = NULL, $strict = false);
    $nature = $faker->sentence($nbWords = 6, $variableNbWords = true);

    return [
        'user_id' => $user_id,
        'identity' => $identity,
        'nature' => $nature,
        'email' => $faker->companyEmail,
        'trade_name' => $faker->catchPhrase,
        'comercial_activity' => $faker->slug,
        'phone' => $faker->tollFreePhoneNumber,
        'cell_phone' => $faker->e164PhoneNumber,
        'web_page' => $faker->companyEmail,
        'address' => $faker->streetAddress,
    ];
});
