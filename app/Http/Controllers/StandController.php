<?php

namespace App\Http\Controllers;

use App\Http\Requests\StandPostRequest;
use App\Models\Stand;
use Illuminate\Http\Request;

class StandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stand=Stand::all();
        //return $schools;
        return response()->json($stand);
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
    public function store(StandPostRequest $request)
    {
        $stand = Stand::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'menber' => $stand
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Stand $stand)
    {
        $stand=Stand::find($stand);
        return response()->json ($stand);
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
    public function update(StandPostRequest $request, Stand $stand)
    {
        $stand->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'stand' => $stand
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stand $stand)
    {
        $stand->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
