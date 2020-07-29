<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\ProfessionalReference::class, function (Faker $faker) {
    $professional_id =  $faker->biasedNumberBetween($min = 1, $max = 100, $function = 'sqrt');
    $institution =  $faker->company;   
    $position = $faker->jobTitle;
    $contact = $faker->freeEmail;              
    $phone = $faker->phoneNumber;

    return [
        'professional_id' => $professional_id,
        'institution' => $institution,
        'position' => $position,
        'contact' => $contact,
        'phone' => $phone,
    ];
});
