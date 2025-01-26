<?php

namespace App\Http\Controllers;

use App\Models\Bac;
use Illuminate\Http\Request;

class BacController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bac = Bac::all();
        return response()->json($bac);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $bac = new Bac();
        $formFields = $request->validate([
            'note_bac' => 'required|string',
            'type_id' => 'required|integer',
            'user_id' => 'required|integer',
        ]);
        $bac->fill($formFields);
        $bac->save();
        return response()->json($bac);
    }


    /**
     * Display the specified resource.
     */
    public function show(Bac $bac)
    {
        return response()->json($bac);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bac $bac)
    {
        $formFields = $request->validate([
            'note_bac' => 'required|string',
            'type_id' => 'required|integer',
            'user_id' => 'required|integer',
        ]);
        $bac->fill($formFields);
        $bac->save();
        return response()->json($bac);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bac $bac)
    {
        $bac->delete();
        return response()->json('Bac deleted');
    }
}
