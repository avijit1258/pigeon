<?php

namespace App\Http\Controllers;

use App\Zone;
use Illuminate\Http\Request;
use Carbon\Carbon;

use App\Http\Requests;

class ZoneController extends Controller
{
	
	public function index()
	{
		    // $zones = Zone::all();
			$zones = Zone::Paginate(15);
			$serial = 1;
			// $zones = \DB::table('zones')->paginate(15);

    		// return view('super_admin.index')->with('zones',$zones);
    		return view('company_admin.zones', compact('zones', 'serial'));
	}

	public function show($zone_id)
	{
		$zone = Zone::find($zone_id);

    	return \Response::json($zone);
	}


	public function store(Request $request)
	{

		// $Zone = Zone::create($request->all());
		$zone = new Zone;
		$zone->name = $request->name;
		$zone->modified_by = \Auth::guard('admins')->user()->name;
		$zone->modified_at = Carbon::now();
		$zone->save();

    	return \Response::json($zone);
	}


	public function update(Request $request, $zone_id)
	{
		$zone = Zone::find($zone_id);

	    $zone->name = $request->name;
	    

	    $zone->save();

	    return \Response::json($zone);
	}

    public function destroy($zone_id)
    {
    	$zone = Zone::destroy($zone_id);

    	return \Response::json($zone);
    }
}
