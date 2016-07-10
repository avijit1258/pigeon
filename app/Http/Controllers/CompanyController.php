<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Http\Requests;

class CompanyController extends Controller
{
	
	public function index()
	{
		    
			$companies = Company::Paginate(15);
			$serial = 1;
			
    		return view('company.index', compact('companies', 'serial'));
	}

	public function edit($id)
	{
		$company = Company::findorfail($id);
		
		return view('company.edit', compact('company'));

	}

	public function create()
	{

		return view('company.create');
	}
	


	public function show($company_id)
	{
		$company = Company::find($company_id);

    	return \Response::json($company);
	}


	public function store(Request $request)
	{
		$company = new Company;
		
		$company->company_name = $request->company_name;
		
		$company->modified_by = \Auth::guard('admins')->user()->id;
		$company->modification_date = Carbon::now()->toDateString();
		$company->save();

    	return view('company.create');
	}


	public function update(Request $request, $company_id)
	{
		$company = Company::find($company_id);

	    $company->company_name = $request->company_name;
	    $company->modified_by = \Auth::guard('admins')->user()->id;

		$company->modification_date = Carbon::now()->toDateString();
	    

	    $company->save();

	    return redirect('/companies/');
	}

    public function destroy($company_id)
    {
    	$company = Company::destroy($company_id);

    	return redirect('/companies/');
    }
}
