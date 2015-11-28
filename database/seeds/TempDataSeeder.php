<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

use App\Temp;

class TempDataSeeder extends Seeder
{
 
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1, 6) as $index) {
            Temp::create([
                'name' => $faker->name,
                'status' => $faker->word,
                'reason' => $faker->sentence
            ]);
        }

    }
}
