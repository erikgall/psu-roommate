<?php

use App\Users\User;

class LoginTest extends IntegrationTestCase
{
    /**
     * It displays the login form.
     *
     * @return void
     */
    public function testDisplayingTheLoginForm()
    {

        $this->visit('/login');
        $this->see('Email Address');
        $this->see('Password');

    }

    /**
     * It displays an error message when email/password are incorrect.
     *
     * @retun void
     */
    public function testSigningInWithBadCredentials()
    {

        $this->visit('/login');
        $this->type('badEmail@testing.com', 'email');
        $this->type('passwordTest', 'password');
        $this->press('Login');
        $this->seePageIs('/login');
        $this->see('These credentials do not match our records.');

    }

    /**
     * It signs in and redirects the user.
     *
     * @return void
     */
    public function testSigningInAsAnInstructor()
    {

        $user = factory(User::class)->create(['password' => bcrypt('password')]);

        $this->visit('/login');
        $this->type($user->email, 'email');
        $this->type('password', 'password');
        $this->press('Login');
        $this->seePageIs('/');

    }

    /**
     * It locks a user out after 5 fails login attempts.
     *
     * @return void
     */
    public function testThrottlingLoginAttempts()
    {

        $this->visit('/login')
             ->submitLogin('test@email.com', 'password', 6)
             ->see('Too many login attempts. Please try again in 60 seconds.');
    }

    /**
     * Submit the login form with a email and password a number of times..
     *
     * @param string $email
     * @param string $password
     * @param int $repeat
     * @return $this
     */
    protected function submitLogin($email = 'test@email.com', $password = 'password', $repeat = 1)
    {

        for ($i = 0; $i < $repeat; $i++) {

            $this->submitForm('Login', ['email' => $email, 'password' => $password]);

        }

        return $this;

    }

}