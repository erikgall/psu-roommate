<?php

namespace App\Http\Controllers\Schools\Roommates;

use App\Users\School;
use App\Users\User;
use Illuminate\Contracts\Auth\Guard;
use App\Http\Controllers\Controller;

class RoommateController extends Controller
{

    protected $user;

    public function __construct(Guard $guard)
    {

        $this->user = $guard->user();

    }

    /**
     * @param \App\Users\School $school
     * @return mixed
     */
    public function index(School $school)
    {

        $users = $school->users()
                        ->whereNotIn('id', [$this->user->id])
                        ->with('responses.answer')
                        ->get()
                        ->reject(function ($user) {

                            return empty($user->responses);

                        });

        if ($users->isEmpty()) {
            flash()->error('Uh oh!', 'It looks like you do not have any matches. We will update you when receive a new match.');

            return redirect()->route('surveys::index');
        }

        $users->each(function ($user) {

            $user->score = 0;

            foreach ($user->responses as $response) {

                $user->score += $response->answer->score;
            }
        });

        return view('schools.roommates.index', compact('users'));

    }

    /**
     * @param \App\Users\School $school
     * @param \App\Users\User $user
     */
    public function show(School $school, User $user)
    {

        flash()->success('Success!', $this->getNotificationSuccess($user));

        return redirect()->back();
    }

    protected function getNotificationSuccess($user)
    {

        return "We have notified {$user->name} of your inquiry.";
    }
}
