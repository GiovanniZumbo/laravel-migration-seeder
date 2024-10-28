<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PassengerSeeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call(
            [PassengerSeeder::class, TrainSeeder::class]
        );
    }
}
