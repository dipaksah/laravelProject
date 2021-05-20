<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class LoginController extends Controller
{



    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/user_dashboard';

    public function login(){
        return view('/user_login');
    }

    // public function redirectTo()
    // {
    //     $type = Auth::user()->is_admin;

    //     if($type == 'admin'){
    //         return '/admin_dashboard';
    //     }elseif ($type == '') {
    //         return '/user_dashboard';
    //     } else {
    //         return  '/user_login';
    //     }
    // }

    public function authenticate(Request $request){
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        // $type = Auth::user()->is_admin;

        if (Auth::attempt($credentials)) {
            // return redirect()->intended('UserDashboard.user_dashboard');
            return redirect()->route('home');
        }
        // elseif(Auth::attempt($credentials) && $type == 'admin'){
        //     return redirect()->intended('AdminDashboard_Layout.admin_dashboard');
        // }
        else{
            return redirect('login')->with('error', 'Oppes! You have entered invalid credentials');
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
