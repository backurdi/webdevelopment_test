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
$factory->define(App\Models\GeoLocation::class, function (Faker\Generator $faker) {
    $city = $faker->city;
    return [
        'geo_lat' => $faker->latitude,
        'geo_lon' => $faker->longitude,
        'geo_code' => $faker->countryCode,
        'slug' => str_slug($city),
        'city_name' => $city,
    ];
});
