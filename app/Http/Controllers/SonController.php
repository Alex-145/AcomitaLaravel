<?php

namespace App\Http\Controllers;

use App\Http\Requests\SonPostRequest;
use App\Models\Son;
use Illuminate\Http\Request;

class SonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sons=Son::all();
        //return $schools;
        return response()->json($sons);
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
    public function store(SonPostRequest $request)
    {
        $son = Son::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'son' => $son
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Son $son)
    {
        $son=Son::find($son);
        return response()->json ($son);
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
    public function update(SonPostRequest $request, Son $son)
    {
        $son->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'son' => $son
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Son $son)
    {
        $son->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
