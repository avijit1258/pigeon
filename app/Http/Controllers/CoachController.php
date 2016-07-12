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
use App\Zone;

use Carbon\Carbon;


class CoachController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coaches = Coach::paginate(15);
        $serial = 1;
        return view('coach.index', compact('coaches', 'serial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $coach_types = CoachType::all();
        $routes = Route::all();
        $seats = Seat::all();
        $counters = Counter::all(); 

        return view('coach.create', compact('coach_types', 'routes', 'seats', 'counters'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['modified_by'] = \Auth::user()->id;
        $request['modification_date'] = Carbon::now();

        $seat_type = Coach::create($request->all());

        return redirect('/coaches/create');
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
        $coach = Coach::findorfail($id);
        $coach_types = CoachType::all();
        $routes = Route::all();
        $seats = Seat::all();
        $counters = Counter::all();
        
        return view('coach.edit', compact('coach','coach_types', 'routes', 'seats', 'counters'));
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
        $request['modified_by'] = \Auth::user()->id;
        $request['modification_date'] = Carbon::now();

        $seat_type = Coach::update($request->all());


        return redirect('/coaches/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $coach = Coach::destroy($id);

        return redirect('/coaches/');
    }
}
