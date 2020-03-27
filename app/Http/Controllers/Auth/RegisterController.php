<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Gender;
use App\Degree;
use App\MaritalStatus;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'age' => ['required','numeric'],
            'last_name' => ['required','string', 'max:255'],
            'second_surname' => ['required','string', 'max:255'],
            'gender_id' => ['required', 'exists:genders,id'],
            'marital_status_id' => ['required', 'exists:marital_status,id'],
            'degree_id' => ['required', 'exists:degrees,id'],
            'interest_level_id' => ['exists:interest_levels,id'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'age' => $data['age'],
            'last_name' => $data['last_name'],
            'second_surname' => $data['second_surname'],
            'gender_id' => $data['gender_id'],
            'marital_status_id' => $data['marital_status_id'],
            'degree_id' => $data['degree_id'],
            'interest_level_id' => $data['interest_level_id'],
        ]);
    }

    public function  showRegistrationForm() {
        $degrees = Degree::all();
        $genders = Gender::all();
        $maritalStatus = MaritalStatus::all();
        $interestLevels_ = [];
        foreach($degrees as $interestLevels) {
            if($interestLevels->interestLevels){
                foreach($interestLevels->interestLevels as $interestLevel){
                    array_push($interestLevels_,$interestLevel);
                }
            }

        }

        return view('auth.register',[
            'degrees' => $degrees,
            'genders' => $genders,
            'maritalStatus' => $maritalStatus,
            'interestLevels' => $interestLevels_,
        ]);
    }
}
