<?php

use App\Simulations\Templates\Templates;
use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Integration test case helper.
 *
 * @author Erik Galloway <erik@mybarnapp.com>
 */
class IntegrationTestCase extends TestCase
{

    use DatabaseTransactions;

    protected $storage;

    /**
     * Setup the test environment.
     *
     * @return void
     */
    public function setUp()
    {

        parent::setUp();

        $this->runDatabaseMigrations();

    }

    /**
     * Run the database migrations
     *
     * @return void
     */
    public function runDatabaseMigrations()
    {

        $this->artisan('migrate');

        $this->callIntegrationTestSeeders();

        $this->beforeApplicationDestroyed(function () {

            $this->artisan('migrate:reset');
        });

    }

    /**
     * Seed the database for all component tests.
     *
     * @return void
     */
    public function callIntegrationTestSeeders()
    {

        $this->seed();

    }


}