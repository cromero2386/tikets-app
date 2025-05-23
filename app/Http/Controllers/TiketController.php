<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use Illuminate\Http\Request;
use Illuminate\Contracts\Cache\Store;
use App\Http\Requests\StoreTicketRequest;

class TiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$tickets = Tiket::all();
        $tickets = Tiket::with('provincia')->get();

        $tickets = $tickets->map(function ($ticket) {
            return [
                'id' => $ticket->id,
                'nombre' => $ticket->nombre,
                'provincia' => [
                    'id' => $ticket->provincia->id,
                    'nombre' => $ticket->provincia->nombre
                ]
            ];
        });
        return response()->json($tickets);
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
    public function store(StoreTicketRequest $request)
    {
        $ticket = Tiket::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
            'provincia_id' => $request->provincia_id,
        ]);

        return response()->json($ticket);
    }

    /**
     * Display the specified resource.
     */
    public function show(Tiket $tiket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tiket $tiket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tiket $tiket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tiket $tiket)
    {
        //
    }
}
