<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CoachType;
use Carbon\Carbon;
use App\Http\Requests;

class CoachTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coach_types = CoachType::paginate(15);
        $serial = 1;
        return view('coach_type.index', compact('coach_types', 'serial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coach_type.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coach_type = new CoachType;
        
        $coach_type->coach_type = $request->coach_type;
        
        $coach_type->modified_by = \Auth::user()->id;
        $coach_type->modification_date = Carbon::now();
        $coach_type->save();

        return view('coach_type.create');
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
        $coach_type = CoachType::findorfail($id);
        
        return view('coach_type.edit', compact('coach_type'));
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
        $coach_type = CoachType::findOrFail($id);
        
        $coach_type->coach_type = $request->coach_type;
        
        $coach_type->modified_by = \Auth::user()->id;
        $coach_type->modification_date = Carbon::now();
        $coach_type->save();

        return redirect('/coach_types/');
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
