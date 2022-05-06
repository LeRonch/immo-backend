<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker;
use App\Models\Property;
class DatabaseSeederProperty extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 50; $i++) {
            $property = new Property;
            $property->title = $faker->text;
            $property->description = $faker->text;
            $property->size = $faker->randomNumber;
            $property->floor = $faker->randomNumber;
            $property->image = $faker->image;
            $property->room = $faker->randomNumber;
            $property->price = $faker->randomNumber;
            $property->address = $faker->address;
            $property->zipcode = $faker->postcode;
            $property->city = $faker->city;
            $property->save();
        }
    }
}
