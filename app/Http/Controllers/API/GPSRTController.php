<?php

namespace App\Http\Controllers\API;

use App\Models\GPS_RT;
use Illuminate\Http\Request;

class GPSRTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GPS_RT $model)
    {
        return response($model::get()->toJson(JSON_PRETTY_PRINT), 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'lng'=>'required',
            'lat'=>'required'
        ]);
        GPS_RT::create($request->all());
        return response()->json([
            "message" => "Record created"
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GPS_RT  $gPS_RT
     * @return \Illuminate\Http\Response
     */
    public function show(GPS_RT $gPS_RT)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GPS_RT  $gPS_RT
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GPS_RT $gPS_RT)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GPS_RT  $gPS_RT
     * @return \Illuminate\Http\Response
     */
    public function destroy(GPS_RT $gPS_RT)
    {
        //
    }
}
