<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    public function redirectTo()
    {
        $type = Auth::user()->is_admin;

        if($type == 'admin'){
            return '/admin_dashboard';
        }elseif ($type == '') {
            return '/home';
        } else {
            return  '/user_login';
        }
    }



//    protected $redirectTo = RouteServiceProvider::ADMIN_DASHBOARD;
//    protected $redirectTo = RouteServiceProvider::USER_DASHBOARD;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
