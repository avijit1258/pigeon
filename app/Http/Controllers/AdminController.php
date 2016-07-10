<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Crypt;
use Hash;

class AdminController extends Controller
{
    public function login(Request $request)
    {

        if(\Auth::guard('admins')->attempt(['username' => $request->username, 'password' => $request->password]))
        {

        	if(\Auth::guard('admins')->user()->type == "super_admin")
        		return redirect('users');
        	elseif (\Auth::guard('admins')->user()->type == "admin") {
        		return view('admin.admin');
        	}else
        	{
        		return "hahaha";
        	}
        }
        return "wrong credentials";

    }
    public function logout()
    {
        
        \Auth::guard('admins')->logout();
        \Session::flush();
        return redirect('/');
    }
}
