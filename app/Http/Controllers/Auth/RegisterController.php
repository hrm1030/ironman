<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/profile';

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
        if($data['user_type'] == "individual")
        {
            return Validator::make($data, [
                'name' => 'required|string|max:255',
                'surname' => 'required|string|max:255',
                'username_instead' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]);
        }
        if($data['user_type'] == "business")
        {
            die(print_r($data));
            return Validator::make($data, [
                'username' => 'required|string|max:255',
                'company_name' => 'required|string|max:255',
                'position_in_company' => 'required|string|max:255',
                'useremail' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6|confirmed',
            ]);
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // die(print_r($data));
        if($data['user_type'] == "individual")
        {
            return User::create([
                'name' => $data['name'],
                'user_type' => $data['user_type'],
                'surname' => $data['surname'],
                'username_instead' => $data['username_instead'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);
        }
        if ($data['user_type'] == 'business')
        {
            return User::create([
                'name' => $data['name'],
                'user_type' => $data['user_type'],
                'company_name' => $data['company_name'],
                'position_in_company' => $data['position_in_company'],
                'email' => $data['email'],
                'password' => bcrypt($data['password']),
            ]);
        }
        
    }
}
