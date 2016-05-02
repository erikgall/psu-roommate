<?php

class RegisterTest extends IntegrationTestCase
{

    public function testDisplayingTheRegisterForm()
    {

        $this->visit('/register')
             ->see('Email')
             ->see('Name')
             ->see('Confirm Password');
    }

    public function testRegisteringAUser()
    {

        $this->visit('/register')
             ->type('Test', 'first_name')
             ->type('User', 'last_name')
             ->type('test@testuser.com', 'email')
             ->type('password', 'password')
             ->type('password', 'password_confirmation')
             ->press('Register')
             ->seeInDatabase('users', ['email' => 'test@testuser.com']);
    }
}
