<?php

use App\Users\School;
use App\Users\State;
use Illuminate\Database\Seeder;

class SchoolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        foreach ($this->schools() as $school) {

            School::create($school);
            
        }

    }

    protected function schools()
    {

        return [

            [
                'name' => 'Penn State University',
                'city' => 'State College',
                'state_id' => State::whereAbbreviation('PA')->first()->id
            ],
        ];
    }
}
