<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeriodsPostRequest;
use App\Models\Period;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $period=Period::all();
        //return $schools;
        return response()->json($period);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PeriodsPostRequest $request)
    {
        $period = Period::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'period' => $period
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Period $period)
    {
        $period=Period::find($period);
        return response()->json ($period);
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
    public function update(PeriodsPostRequest $request, Period $period)
    {
        $period->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'period' => $period
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Period $period)
    {
        $period->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
