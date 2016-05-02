<?php

use App\Users\User;

class UserDashboardTest extends IntegrationTestCase
{

    /**
     * It displays the user survey panel.
     *
     * @return void
     */
    public function testDisplayingTheUserSurveyMessage()
    {

        $user = factory(User::class)->create(['password' => bcrypt('password')]);

        $this->actingAs($user)
             ->visit('/survey')
             ->see('Are you ready to find your next roommate?')
            ->click('Start Survey')->see('How do you describe yourself?');

    }

}
