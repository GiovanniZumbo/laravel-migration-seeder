<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 30; $i++) {
            $newTrain = new Train();
            $newTrain->azienda = $faker->company();
            $newTrain->stazione_partenza = $faker->city();
            $newTrain->stazione_arrivo = $faker->city();
            $newTrain->data_partenza = $faker->dateTimeBetween('now', '+1 week');
            $newTrain->orario_partenza = $faker->time();
            $newTrain->orario_arrivo = $faker->time();
            $newTrain->binario = $faker->numberBetween(0, 25);
            $newTrain->codice_treno = $faker->bothify('?? - #####');
            $newTrain->numero_carrozze = $faker->numberBetween(2, 30);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean(false);
            $newTrain->save();
        }
    }
}
