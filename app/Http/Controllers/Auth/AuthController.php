<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\RegisterRequest;
use App\Users\AcademicStatus;
use App\Users\User;
use App\Users\Gender;
use App\Users\School;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     */
    public function __construct()
    {

        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);

    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister()
    {

        $statuses = AcademicStatus::all()->pluck('name', 'id');
        $genders = Gender::all()->pluck('name', 'id');
        $schools = School::all()->pluck('name', 'id');

        return view('auth.register', compact('schools', 'genders', 'statuses'));
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {

        Auth::guard($this->getGuard())->logout();

        flash()->success('Success!', 'You were logged out successfully.');

        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param \App\Http\Requests\Auth\RegisterRequest $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Foundation\Validation\ValidationException
     */
    public function register(RegisterRequest $request)
    {

        Auth::guard($this->getGuard())->login($this->create($request->all()));

        flash()->success('Success!', 'Your are now registered and signed in.');

        return redirect($this->redirectPath());
    }

    /**
     * Send the response after the user was authenticated.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  bool $throttles
     * @return \Illuminate\Http\Response
     */
    protected function handleUserWasAuthenticated(Request $request, $throttles)
    {

        if ($throttles) {
            $this->clearLoginAttempts($request);
        }

        if (method_exists($this, 'authenticated')) {
            return $this->authenticated($request, Auth::guard($this->getGuard())->user());
        }

        flash()->success('Success!', 'You were signed in successfully');

        return redirect()->intended($this->redirectPath());
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return User
     */
    protected function create(array $data)
    {

        return User::create([
            'name'               => "{$data['first_name']} {$data['last_name']}",
            'dob'                => Carbon::create($data['year'], $data['month'], $data['day'])->toDateTimeString(),
            'academic_status_id' => $data['academic_status_id'],
            'school_id'          => $data['school_id'],
            'gender_id'          => $data['gender_id'],
            'email'              => $data['email'],
            'password'           => bcrypt($data['password']),
        ]);
    }
}
