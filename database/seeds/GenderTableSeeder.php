<?php

use App\Users\Gender;
use Illuminate\Database\Seeder;

class GenderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Gender::create([
            'name' => 'Male',
            'abbreviation' => 'm'
        ]);

        Gender::create([
            'name' => 'Female',
            'abbreviation' => 'f'
        ]);


        Gender::create([
            'name' => 'N/A',
            'abbreviation' => 'n/a'
        ]);

    }
}
