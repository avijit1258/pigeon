<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Admin;
use App\Bus;
use App\Coach;
use App\CoachDepartureTime;
use App\CoachType;
use App\Company;
use App\Counter;
use App\Fare;
use App\CoachZone;
use App\Seat;
use App\SeatArrangement;
use App\SeatType;
use App\User;
use App\Route;
use App\RouteZone;
use App\Zone;

use Carbon\Carbon;

class RouteZoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $route_zones = RouteZone::paginate(15);
        $serial = 1;

        return view('route_zone.index', compact('route_zones', 'serial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $routes = Route::all();
        $zones = Zone::all();

        return view('route_zone.create', compact('routes', 'zones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        for ($i = 0 ; $i < count($request->zone_id) ; $i++) {
            $route_zone = new RouteZone;
            $route_zone->route_id = $request->route_id;
            $route_zone->zone_id = $request->zone_id[$i];
            $route_zone->sequel = $i+1;
            $route_zone->modified_by = \Auth::user()->id;
            $route_zone->modification_date = Carbon::now();

            $route_zone->save();

        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
