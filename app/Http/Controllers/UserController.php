<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Company;
use Carbon\Carbon;
use Auth;

class UserController extends Controller
{
	
    public function index()
	{
		    $companies = Company::all();
			$users = User::paginate(15);
			$serial = 1;
			
			
    		return view('user.index', compact('users', 'serial', 'companies'));
	}

	public function show($company_admin_id)
	{
		
	}

	public function create()
	{
		$companies = Company::all();

		return view('user.create', compact('companies'));
	}

	public function edit($id)
	{
		$user = User::find($id);
		$companies = Company::all();

		return view('user.edit', compact('user','companies'));

	}


	public function store(Request $request)
	{

		$user = new User;

		$user->fullname = $request->fullname;
		$user->username = $request->username;
		$user->password = bcrypt($request->password);
		$user->active = $request->active;
		$user->type = $request->type;
		$user->company_id = $request->company_id;
		$user->save();

		$companies = Company::all();
		
		
    	return view('user.create',compact('companies'));
	}


	public function update(Request $request, $id)
	{
		$user = User::find($id);

		$user->fullname = $request->fullname;
		$user->username = $request->username;
		$user->active = $request->active;
		$user->type = $request->type;
		$user->company_id = $request->company_id;
		$user->save();

		$companies = Company::all();
		$users = User::paginate(15);
		$serial = 1;
			
			
    	return view('user.index', compact('users', 'serial', 'companies'));
	}

    public function destroy($id)
    {
    	$user = User::destroy($id);

    	$companies = Company::all();
		$users = User::paginate(15);
		$serial = 1;
			
			
    	return view('user.index', compact('users', 'serial', 'companies'));
    }
}
