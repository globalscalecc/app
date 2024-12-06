<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fingerprint;

class FingerprintController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fingerprints = Fingerprint::get();
        return response()->json($fingerprints);
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fingerprint = new Fingerprint();
        $fingerprint->name = $request->name;
        $fingerprint->description = $request->description;
        $fingerprint->save();
        return response()->json($fingerprint);
    }
 
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $fingerprint = Fingerprint::find($id);
        return response()->json($fingerprint);
    }
 
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $fingerprint = Fingerprint::find($id);
        $fingerprint->name = $request->name;
        $fingerprint->description = $request->description;
        $fingerprint->save();
        return response()->json($fingerprint);
    }
 
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Fingerprint::destroy($id);
        return response()->json(['message' => 'Deleted']);
    }
}
