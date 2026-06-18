<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Plan;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Events\Registered;

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
         dd($data);
        exit();
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:255', 'unique:users'],
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
        $username=$request->input('username');

        
        
        $password=$request->input('password');
        $phone=$request->input('phone');
        $invitatiob_code=$request->input('invitatiob_code');
        // $user = User::where('username',$username)->first();
        // if($user) 
        // {
        //     echo"hello";
        //      $alertMessage = 'The username is already taken. Please try again.';
        //      session()->flash('taken','The username is already taken. Please try again.');
        //      return view('register');
        // }
       
        $plans   = Plan::where('status', 1)->orderBy('created_at', 'desc')->get();
        $banners = Banner::where('status', 1)->get();
      
        $user               =  [
            'username'          => $username,
            'phone'         =>  $phone,
            'password'      => Hash::make($password),
        ];
        
        if (!empty($invitatiob_code)) {
             if(User::where('referral_code',$invitatiob_code)->count()){
            $referred_by = User::where('referral_code',$invitatiob_code)->first();
            $user['referred_by'] = $referred_by->id;
             }
        else{
            return redirect()->route('user.register')->with('invalid_code',1);
            }
     
        
        $user['referral_code'] = \Illuminate\Support\Str::random(8);
        dd( $user['referral_code']);
        DB::table('users')->insert($user);
        
        $newlogin=session()->flash('message', 'Welcome');
        
       
        return redirect()->route('home');
    }
}
}
