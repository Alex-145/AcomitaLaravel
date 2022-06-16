<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenberPostRequest;
use App\Models\Menber;
use Illuminate\Http\Request;

class MenberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $menber=Menber::all();
        //return $schools;
        return response()->json($menber);
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
    public function store(MenberPostRequest $request)
    {
        $menber = Menber::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'menber' => $menber
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Menber $menber)
    {
        $menber=Menber::find($menber);
        return response()->json ($menber);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenberPostRequest $request, Menber $menber)
    {
        $menber->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'menber' => $menber
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menber $menber)
    {
        $menber->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
