<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Company;
use App\Zone;
use App\Counter;
use Carbon\Carbon;

class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $companies = Company::all()->sortBy('company_name');
        $zones = Zone::all()->sortBy('zone_name');
        $counters = Counter::paginate(15);
        $serial = 1;
        return view('counter.index', compact('counters','zones',  'serial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all()->sortBy('company_name');
        $zones = Zone::all()->sortBy('zone_name');

        return view('counter.create', compact('companies', 'zones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $counter = new Counter;
        $counter->counter_name = $request->counter_name;
        $counter->company_id = \Auth::user()->company_id;
        $counter->zone_id = $request->zone_id;
        $counter->modification_date = Carbon::now()->toDateTimeString();
        $counter->modified_by = \Auth::user()->id;

        $counter->save();

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
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $counter = Counter::findOrFail($id);
        $zones = Zone::all();

        return view('counter.edit', compact('counter', 'zones'));
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
        $counter = Counter::findOrFail($id);
        $counter->counter_name = $request->counter_name;
        $counter->company_id = \Auth::user()->company_id;
        $counter->zone_id = $request->zone_id;
        $counter->modification_date = Carbon::now()->toDateTimeString();
        $counter->modified_by = \Auth::user()->id;

        $counter->save();

        return redirect('/counters/');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $counter = Counter::destroy($id);

        return redirect('/counters/');

    }
}
