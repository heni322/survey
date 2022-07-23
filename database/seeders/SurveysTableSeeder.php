<?php

namespace Database\Seeders;

use App\Models\Answer;
use App\Models\Survey;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
// use Illuminate\Database\Factories\AnswerFactory;
class SurveysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [];
        $faker = Faker::create();
        foreach(range(1,10) as $index){
            $companies[] = [
                'question' => $faker->paragraph(),
                'id_answer' => Answer::factory(),
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
    }
}
