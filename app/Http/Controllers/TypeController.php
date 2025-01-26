<?php

namespace App\Http\Controllers;

use App\Models\Type;
use App\Enums\TypeBacEnum;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Enum;

class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $type = Type::all();
        return response()->json($type);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $type = new Type();
        $formFields = $request->validate([
            'name_bac' => ['required', new Enum(TypeBacEnum::class)],
            'type_bac' => 'required|string',
        ]);
        $type->fill($formFields);
        $type->save();
        return response()->json($type);
    }

    /**
     * Display the specified resource.
     */
    public function show(Type $type)
    {
       return response()->json($type);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Type $type)
    {
        $formFields = $request->validate([
            'name_bac' => ['required', new Enum(TypeBacEnum::class)],
            'type_bac' => 'required|string',
        ]);
        $type->fill($formFields);
        $type->save();
        return response()->json($type);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Type $type)
    {
        //
    }
}
