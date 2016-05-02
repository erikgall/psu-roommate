<?php

class IndexTest extends IntegrationTestCase
{

    /**
     * It displays the login form.
     *
     * @return void
     */
    public function testDisplayingTheIndexPage()
    {

        $this->visit('/')
             ->see('College Roommate')
             ->see('Find your next roommate.');

    }

}