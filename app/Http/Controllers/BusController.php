<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Bus;
use Carbon\Carbon;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buses = Bus::paginate(60);
        $serial = 1;

        return view('bus.index', compact('buses', 'serial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bus = new Bus;
        
        $bus->bus_number = $request->bus_number;
        $bus->seats = $request->seats;

        //$bus = $request->all();
        
        $bus->modified_by = \Auth::user()->id;
        $bus->company_id = \Auth::user()->company_id;
        $bus->modification_date = Carbon::today();
        $bus->save();

        return view('bus.create');
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
        $bus = Bus::find($id);

        return view('bus.edit', compact('bus'));
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
        $bus = Bus::find($id);
        
        // $bus->bus_number = $request->bus_number;
        //$bus = $request->all();
        $bus->bus_number = $request->bus_number;
        $bus->seats = $request->seats;
        $bus->modified_by = \Auth::user()->id;
        $bus->modification_date = Carbon::today();
        $bus->save();

        return redirect('/buses/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bus = Bus::destroy($id);
        return redirect()->back();
    }
}
