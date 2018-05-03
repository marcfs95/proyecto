<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {

    $nombre = $faker->name;
    return [
        'name' => $nombre,
        'slug' => str_slug($nombre),
        'demo_domain' => $faker->domainName,
        'dev_domain' => $faker->domainName,
        'prod_domain' => $faker->domainName,
        'hosting' => true,
        'contact' => 'contacto',
        'state' => $faker->numberBetween($min = 0, $max = 100),
        'location_path' => 'localizacion del directorio',
        'language' => 'es,en,it',
        'validation' => false
    ];
});
