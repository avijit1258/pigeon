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

class CoachDepartureTimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $coach_departure_times = CoachDepartureTime::paginate(15);
        $serial = 1;

        return view('coach_departure_time.index', compact('coach_departure_times', 'serial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coaches = Coach::all();
        $counters = Counter::all();

        return view('coach_departure_time.create', compact('coaches', 'counters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        for ($i = 0 ; $i < count($request->counter_id) ; $i++) {
            $counter_departure_time = new CoachDepartureTime;
            $counter_departure_time->coach_id = $request->coach_id;
            $counter_departure_time->counter_id = $request->counter_id[$i];
            $counter_departure_time->time = $request->time;
            $counter_departure_time->modified_by = \Auth::user()->id;
            $counter_departure_time->modification_date = Carbon::now();

            $counter_departure_time->save();

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
