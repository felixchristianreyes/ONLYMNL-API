<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Markers;

class MarkersController extends Controller
{
    public function index() 
    {
        $marker = Markers::all();
        return response()->json([
            'status'=> 200,
            'data'=> $marker
        ]);
    }

    public function store(Request $request)
    {
        $marker = new Markers;
        $marker->lat = $request->input('lat');
        $marker->lng = $request->input('lng');
        $marker->type = $request->input('type');
        $marker->address = $request->input('address');
        $marker->save();

        return response()->json([
            'status' => 200,
            'message' => 'Marker Added Successfully'
        ]);
    }
}
