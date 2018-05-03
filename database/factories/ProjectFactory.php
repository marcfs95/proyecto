<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {

    return [
        'name' => $faker->name,
        'dominio' => $faker->domainName,
        'contacto' => $faker->firstNameMale,
        'state' => $faker->numberBetween($min = 0, $max = 100),
        'hosting' => $faker->domain,
        'structure_path' => $faker->file($sourceDir = '/', $targetDir = '/tmp'),
        'language' => 'es,en,it',
        'validation' => false
    ];
});
