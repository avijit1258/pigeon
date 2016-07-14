<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seat;
use Carbon\Carbon;
use App\Http\Requests;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seats = Seat::paginate(15);
        $serial = 1;
        return view('seat.index', compact('seats', 'serial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seat = new Seat;
        
        $seat->seat_name = $request->seat_name;
        $seat->row = $request->row;
        $seat->col = $request->col;
        $seat->modified_by = \Auth::user()->id;
        $seat->modification_date = Carbon::now();
        $seat->save();

        return view('seat.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Seat::find($id);
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seat = Seat::findorfail($id);
        
        return view('seat.edit', compact('seat'));
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
        $seat = Seat::findOrFail($id);
        $seat->seat_name = $request->seat_name;
        $seat->row = $request->row;
        $seat->col = $request->col;
        $seat->modified_by = \Auth::user()->id;
        $seat->modification_date = Carbon::now();
        $seat->save();

        return redirect('/seats/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $seat = Seat::destroy($id);

        return redirect('/seats/');
    }
}
