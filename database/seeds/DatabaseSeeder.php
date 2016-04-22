<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(SurveySeeder::class);
         $this->call(StateTableSeeder::class);
         $this->call(SchoolTableSeeder::class);
         $this->call(GenderTableSeeder::class);
         $this->call(AcademicStatusesSeeder::class);
    }
}
