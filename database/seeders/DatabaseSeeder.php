<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            AdminsTableSeeder::class,
            TracerStudyRPLSeeder::class,
            TracerStudyAKLSeeder::class,
            TracerStudyMPSeeder::class,
        ]);
        $this->call(StagesTableSeeder::class);
        $this->call(QuestionsTableSeeder::class);
        $this->call(QuestionOptionsTableSeeder::class);
        $this->call(QuestionConditionsTableSeeder::class);
    }
}
