<?php

use App\Users\User;

class UserSurveyTest extends IntegrationTestCase
{

    /**
     * Taking the survey.
     *
     * @return void
     */
    public function testTakingTheSurvey()
    {

        $user = factory(User::class)->create(['password' => bcrypt('password')]);

        $this->actingAs($user)
             ->visit('/survey/start')
             ->select('1', 'question_1')
             ->select('6', 'question_2')
             ->select('9', 'question_3')
             ->select('11', 'question_4')
             ->select('13', 'question_5')
             ->select('16', 'question_6')
             ->select('19', 'question_7')
             ->select('24', 'question_8')
             ->select('28', 'question_9')
             ->select('31', 'question_10')
             ->select('34', 'question_11')
             ->select('37', 'question_12')
             ->select('39', 'question_13')
             ->select('43', 'question_14')
             ->select('46', 'question_15')
             ->select('50', 'question_16')
             ->select('54', 'question_17')
             ->select('56', 'question_18')
             ->press('Save')
             ->see('115 Points')
             ->see('Roommate App Score');

    }
}
