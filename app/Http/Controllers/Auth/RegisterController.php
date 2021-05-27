<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\VerifyUser;
use Mail;
use App\Mail\verifyEmail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

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
    protected $redirectTo = RouteServiceProvider::ADMIN_DASHBOARD;

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
            'phone' => ['required', 'string', 'max:10'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(Request $request)
    {
        $reg = new User();
        // dd($reg);
        // $reg->Id = Auth::user()->id;
        $reg->name = $request->name;
        $reg->email = $request->email;
        $reg->phone = $request->phone;
        $reg->password = Hash::make($request->password);
        $verification_code = sha1(time());
        $reg->save();
        
        $verifyUser = VerifyUser::create([
            'user_id' => $reg->id,
            'token' => sha1(time())
          ]);
          \Mail::to($reg->email)->send(new VerifyEmail($reg));
        //   return $reg;
        // $verify = new VerifyUser();
        // $verify->token = Str::random(60);
        // $verify->user_id = $reg->id;
        // $verify->save();
        // VerifyUser::create([
        //     'token' => Str::random(60),
        //     'user_id' => $reg->id,
        // ]);

        // Mail::to($reg->email)->send(new VerifyEmail($reg));
        // Mail::send('mail.CreateAccount', compact('request', 'verification_code', 'email', 'name'), function($message) use ($request, $email)
        // {
        //     $message->to($email, $name, $verification_code->subject('Profile Created'));
        // });
        // return redirect('/profile');
        return redirect()->route('userLogin')->with('reg',$reg);
    }

    public function verifyEmail($token){
        $verifyUser = VerifyUser::where('token', $token)->first();
        if(isset($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->verified) {
            $verifyUser->user->verified = 1;
            $verifyUser->user->save();
            $status = "Your e-mail is verified. You can now login.";
            } else {
            $status = "Your e-mail is already verified. You can now login.";
            }
        } else {
            return redirect('userLogin')->with('warning', "Sorry your email cannot be identified.");
        }
        // return redirect('userLogin')->with('status', $status);
        return redirect()->route('userLogin')->with('status', $status);
        // $verifieduser = VerifyUser::where('token',$token)->first();
        // if(isset($verifieduser)){
        //     $user = $verifieduser->user;
        //     if(!$user->email_verified_at){
        //         $user->email_verified_at = Carbon::now();
        //         $user->save();
        //         return \redirect(route('userLogin'))->with('success', 'your email has been verified');
        //     } else{
        //         return \redirect()->back()->with('info', 'you email has already been verified');
        //     }
        // } else{
        //     return \redirect(route('userLogin'))->with('error', 'something went worng');
        // }
    }
}
