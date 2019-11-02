<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }

    public function api_login(Request $request){
        // Request $request
        $user = User::all();
        $hash_pass = Hash::make($request->input('password'));
        $request->isMethod('get');
        foreach($user as $data){
            $get_email = $data->email;
            $get_pass = $data->password;
            if ($request->input('email') == $get_email){
                // && $hash_pass == $get_pass
                return $hash_pass;
            }
        }
        // return $request->input('password');
    }
}

// $2y$10$/3PUt6/skuiLUk54xw0D0.iu0nzpbXH3DAi1Zha2oGEAAVLpvcH6m
// $2y$10$K2PxbH/3RtLURY6dE5YWhuplCsiB6jF/Dg0dhQxGqnsz4Jk2i.Pra