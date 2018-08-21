<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Camp;
use App\District;
use App\Area;

class CampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $camps = Camp::all();
        return view('camp.index', compact('camps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts = District::all();
        $areas = Area::all();
        return view('camp.create', compact('districts', 'areas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $v = Validator::make($request->all(), [
            'name' => 'required',
            'area' => 'required|numeric',
            'max_capacity' => 'required|numeric',
            'location' => 'required',
            'contact_details' => 'required',
        ]);
        if ($v->fails()) {
            return redirect('camps/create')
                ->withErrors($v)
                ->withInput();
        }

        $camp = new Camp();
        $camp->name = $request->name;
        $camp->area_id = $request->area;
        $camp->max_capacity = $request->max_capacity;
        $camp->location = $request->location;
        $camp->contact_details = $request->contact_details;
        $camp->location_coordinates = $request->location_coordinates;
        $camp->is_collection_center = $request->get('is_collection_center', 0);
        $camp->save();

        return redirect('camp/');
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
