<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Auth;
use Illuminate\Http\Request;

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
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            'username' => 'required|max:255',
            // 'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'name' => $data['name'],
            'password' => bcrypt($data['password']),
            'type' => $data['type'],
            'active' => $data['active'],
            'company_id' => $data['company_id'],

        ]);
    }
     public function login(Request $request)
    {
        
    
        if (Auth::attempt($request->only('username', 'password')))
        {
            //return redirect('/home');
            //return "welcome admin";
            if(Auth::user()->type == 'admin')
                return view('company_admin.index');
            elseif(Auth::user()->type == 'manager')
                return "welcome manager";
            elseif(Auth::user()->type == 'counterman')
                return view('counterman.index');
            else
                return "Online user";

        }

        return redirect('/login')->withErrors([
            'email' => 'These credentials do not match our records.',
        ]);
    }
    public function showLoginForm(){
        return view ('login.userLogin');
    }
    public function logout()
    {

        \Auth::logout();
        \Session::flush();

        return redirect('/');

    }
}
