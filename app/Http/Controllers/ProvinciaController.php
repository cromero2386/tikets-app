<?php

namespace App\Http\Controllers;

use App\Models\Provincia;
use Illuminate\Http\Request;

class ProvinciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$provincias = Provincia::all();
        $provincias = Provincia::select('id', 'nombre')->get();
        //SELECT * FROM provincias;

        //$provinciasMapeadas = $provincias->map(function ($provincia) {
        //    return [
        //        'id' => $provincia->id,
        //        'nombre' => $provincia->nombre,
        //    ];
        //});
        return response()->json($provincias);
    }

    public function getProvinciasTicket()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Provincia $provincia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Provincia $provincia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Provincia $provincia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Provincia $provincia)
    {
        //
    }
}
