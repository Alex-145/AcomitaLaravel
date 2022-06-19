<?php

namespace App\Http\Controllers;

use App\Http\Requests\ActivityRequest;
use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $activities=Activity::all();
        //return $schools;
        return response()->json($activities);
    }
    public function show(Activity $activity){
        $activities=Activity::find($activity);
        return response()->json($activity);

    }



    public function store(ActivityRequest $request){
        $activity = Activity::create($request->all());

        return response()->json([
            'message' => "record saved successfully!",
            'x' => $activity
        ], 200);
    }

    public function update(ActivityRequest $request, Activity $activity){
        $activity->update($request->all());

        return response()->json([
            'message' => "record updated successfully!",
            'x' => $activity
        ], 200);
    }

    public function destroy(Activity $activity){
        $activity->delete();
        return response()->json([
            'message' => "record deleted successfully!",
        ], 200);
    }
}
