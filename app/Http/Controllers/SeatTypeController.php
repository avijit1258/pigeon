<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use App\SeatType;

class SeatTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seat_types = SeatType::paginate(15);
        $serial = 1;
        return view('seat_type.index', compact('seat_types', 'serial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seat_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seat_type = new SeatType;
        
        $seat_type->seat_type_name = $request->seat_type_name;
        
        $seat_type->modified_by = \Auth::user()->id;
        $seat_type->modification_date = Carbon::now();
        $seat_type->save();

        return view('seat_type.create');
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
        $seat_type = SeatType::findorfail($id);
        
        return view('seat_type.edit', compact('seat_type'));
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
        $seat_type = SeatType::findOrFail($id);
        $seat_type->seat_type_name = $request->seat_type_name;
        $seat_type->modified_by = \Auth::user()->id;
        $seat_type->modification_date = Carbon::now();
        $seat_type->save();

        return redirect('/seat_types/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $seat_type = SeatType::destroy($id);

        return redirect('/seat_types/');
    }
}
