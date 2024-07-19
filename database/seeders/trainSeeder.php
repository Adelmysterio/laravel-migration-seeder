<?php
namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class trainSeeder extends Seeder
{

    public function run(Faker $faker): void
    {
        for ($i=0; $i < 20 ; $i++) {
            $train = new Train();
            $train->azienda = $faker->words(2);
            $train->stazione_partenza = $faker->words(2);
            $train->stazione_arrivo = $faker->words(2);
            $train->orario_partenza = $faker->dateTime();
            $train->orario_arrivo = $faker->dateTime();
            $train->codice_treno = $faker->randomNumber(8, true);
            $train->numero_carrozze = $faker->numberBetween(7, 20);
            $train->in_orario = $faker->boolean();
            $train->cancellato = $faker->boolean();
            $train->save();
        }
    }
}
