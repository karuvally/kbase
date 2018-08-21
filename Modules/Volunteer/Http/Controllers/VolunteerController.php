<?php

namespace Modules\Volunteer\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Volunteer\Entities\Volunteer;

class VolunteerController extends Controller
{

    public function __construct(Volunteer $volunteer) {
        $this->volunteer = $volunteer;
    }
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $volunteers = $this->volunteer->all();
        return view('volunteer::index', compact('volunteers'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('volunteer::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Show the specified resource.
     * @return Response
     */
    public function show()
    {
        return view('volunteer::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @return Response
     */
    public function edit()
    {
        return view('volunteer::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param  Request $request
     * @return Response
     */
    public function update(Request $request)
    {
    }

    /**
     * Remove the specified resource from storage.
     * @return Response
     */
    public function destroy()
    {
    }
}
