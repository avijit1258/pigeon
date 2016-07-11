<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;
use Carbon\Carbon;
use App\Http\Requests;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routes = Route::paginate(15);
        $serial = 1;
        return view('route.index', compact('routes', 'serial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('route.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $route = new Route;
        
        $route->route_name = $request->route_name;
    
        $route->modified_by = \Auth::user()->id;
        $route->modification_date = Carbon::now();
        $route->save();

        return view('route.create');
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
        $route = Route::findorfail($id);
        
        return view('route.edit', compact('route'));
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
        $route = Route::findOrFail($id);
        $route->route_name = $request->route_name;

        $route->modified_by = \Auth::user()->id;
        $route->modification_date = Carbon::now();
        $route->save();

        return redirect('/routes/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $route = Route::destroy($id);

        return redirect('/routes/');
    }
}
