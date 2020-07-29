<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Professional::class, function (Faker $faker) {
    $user_id = $faker->biasedNumberBetween($min = 1, $max = 100, $function = 'sqrt');
    $identity = $faker->randomNumber($nbDigits = NULL, $strict = false);
    $gender = $faker->randomElement(['masculino', 'femenino']);
    $civil_state = $faker->randomElement(['solter@', 'casad@', 'viud@', 'divorciad@']);
    $first_name = $faker->firstNameMale;
    $second_name = $faker->firstNameMale;
    $birthdate = $faker->date($format = 'Y-m-d', $max = 'now');
    $about_me = $faker->sentence($nbWords = 6, $variableNbWords = true);

    return [
        'user_id' => $user_id,
        'identity' => $identity,
        'email' => $faker->safeEmail,
        'first_name' => $first_name,
        'last_name'=> $second_name,
        'nationality' => $faker->citySuffix,
        'civil_state' => $civil_state,
        'birthdate'=> $birthdate,
        'gender' => $gender,
        'phone' => $faker->phoneNumber,
        'address' => $faker->address, 
        'about_me'=> $about_me, 
    ];
});
