<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

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
    protected $redirectTo = '/home';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
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
        ]);
    }


    public function Doctor(Request $request){
        $this->validate($request, [
            'surname'   => 'required',
            'firstname' => 'required',
            'specialty' => 'required',
            'years'     => 'required',
            'phone'     => 'required',
            'location'  => 'required',
            'email'     => 'required',
            'password'  => 'required',
        ]);

        $serviceAccount         = ServiceAccount::fromJsonFile(__DIR__.'/drcloudapp-firebase-adminsdk-tkkut-8ceb04edac.json');
        $firebase               = (new Factory)
                                    ->withServiceAccount($serviceAccount)
                                    ->withDatabaseUri('https://drcloudapp.firebaseio.com/')
                                    ->create();

        $database               = $firebase->getDatabase();

        $newPost                = $database
                                    ->getReference('doctor/')
                                    ->push([  'surname'         => $request->surname,
                                              'first_name'      => $request->firstname,
                                              'last_name'       => '',
                                              'specialty'       => $request->specialty,
                                              'years'           => $request->years,
                                              'phone'           => $request->phone,
                                              'location'        => $request->location,
                                              'email'           => $email->email,
                                              'password'        => $email->password,

                                    ]);
        echo '<pre>';
        print_r($newPost->getvalue());

      return view('home');
    }
}
