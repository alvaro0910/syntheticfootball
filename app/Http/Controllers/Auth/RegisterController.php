<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    //protected $redirectTo = '/home';
    protected function redirectTo()
    {
      if (Auth::check()) {
        return 'homeadm';
      }
      else{
        return 'homeusu';
      }
    }

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
            'documento' => 'required|string|max:15',
            'nombre' => 'required|string|max:25',
            'apellido' => 'required|string|max:25',
            'telefono' => 'required|string|max:20',
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
          'documento' => $data['documento'],
          'nombre' => $data['nombre'],
          'apellido' => $data['apellido'],
          'telefono' => $data['telefono'],
          'email' => $data['email'],
          'password' => bcrypt($data['password']),
          'tipo' => $data['tipo'],
        ]);
    }
}
