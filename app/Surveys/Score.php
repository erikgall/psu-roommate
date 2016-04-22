<?php

namespace App\Surveys;

use App\Users\User;
use Illuminate\Database\Eloquent\Collection;

class Score
{

    protected $score;

    protected $responses;

    /**
     * Score constructor.
     *
     * @param \App\Users\User $user
     */
    public function __construct(User $user)
    {

        $this->user = $user;
        $this->responses = $user->responses()->get();
    }


}