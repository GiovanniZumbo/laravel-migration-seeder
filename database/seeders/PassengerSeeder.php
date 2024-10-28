<?php

namespace Database\Seeders;

use App\Models\Passenger;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PassengerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 60; $i++) {
            $newPassenger = new Passenger();
            $newPassenger->firstName = $faker->firstName;
            $newPassenger->lastName = $faker->lastName;
            $newPassenger->age = $faker->numberBetween(2, 85);
            $newPassenger->save();
        }
    }
}
