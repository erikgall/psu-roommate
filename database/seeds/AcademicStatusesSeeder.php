<?php

use App\Users\AcademicStatus;
use Illuminate\Database\Seeder;

class AcademicStatusesSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->statuses() as $status) {

            AcademicStatus::create($status);

        }
    }

    protected function statuses()
    {

        return [

            [
                'name'         => 'Freshman',
                'abbreviation' => 'Fr',
                'position'     => 1
            ],
            [
                'name'         => 'Sophomore',
                'abbreviation' => 'So',
                'position'     => 2
            ],
            [
                'name'         => 'Junior',
                'abbreviation' => 'Jr',
                'position'     => 3
            ],
            [
                'name'         => 'Senior',
                'abbreviation' => 'Sr',
                'position'     => 4
            ],
            [
                'name'         => 'Graduate Student',
                'abbreviation' => 'Gr',
                'position'     => 5
            ],
        ];
    }
}
