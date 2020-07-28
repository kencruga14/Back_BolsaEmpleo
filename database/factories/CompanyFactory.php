<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'identity'=> $faker -> randomNumber($nbDigits = 9) ,
        'nature'=> $faker->randomElement($array = array ('Sociedad', 'Juridica')),
        'trade_name'=> $faker->name,
        'email'=> $faker->email,
        'comercial_activity'=> $faker->randomElement($array = array ('comercial', 'turistica')),
        'phone'=> $faker->phoneNumber,
        'cell_phone'=> $faker->phoneNumber,
        'web_page'=> $faker->domainName,
        'address'=> $faker->address,
        'state'=> $faker->randomElement($array = array ('Active', 'Inactive')),
    ];
});
