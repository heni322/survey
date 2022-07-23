<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class AnswersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $answers = [];
        $faker = Faker::create();
        foreach(range(1,10) as $index){
                $answers[] = [
                    'response' => $faker->paragraph(),
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
    }
}
