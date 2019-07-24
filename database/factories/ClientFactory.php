<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Client;
use Faker\Generator as Faker;

require_once __DIR__. '/../faker_data/document_number.php';

$factory->define(Client::class, function (Faker $faker) {
    $cpfs = cpfs();
    return [
        'name'                  => $faker->name,
        'email'                 => $faker->email,
        'phone'                 => $faker->phoneNumber,
        'defaulter'             => rand(0,1)
    ];
});

$factory->state(\App\Client::class, \App\Client::TYPE_INDIVIDUAL, function (Faker $faker) {
    $cpfs = cpfs();
    return [
        'document_number'       => $cpfs[array_rand($cpfs,1)],
        'date_birth'            => $faker->date(),
        'sex'                   => rand(1,10) % 2 == 0 ? 'm' : 'f',
        'marital_status'        => rand(1,3),
        'physical_disability'   => rand(1,10) % 2 == 0 ? $faker->word : null
    ];
});

$factory->state(\App\Client::class, \App\Client::TYPE_INDIVIDUAL, function (Faker $faker) {
    $cnpjs = cnpjs();
    return [
        'document_number'       => $cnpjs[array_rand($cnpjs,1)],
        'company_name'          => $faker->company
    ];
});