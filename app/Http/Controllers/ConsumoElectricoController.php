<?php

namespace App\Http\Controllers;

use App\Models\consumo_electrico;
use Illuminate\Http\Request;

class ConsumoElectricoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\consumo_electrico  $consumo_electrico
     * @return \Illuminate\Http\Response
     */
    public function show(consumo_electrico $consumo_electrico)
    {
        $consumo = consumo_electrico::all()->where('dispositivo_id', 1);
        return view('project.consumo', compact('consumo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\consumo_electrico  $consumo_electrico
     * @return \Illuminate\Http\Response
     */
    public function edit(consumo_electrico $consumo_electrico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\consumo_electrico  $consumo_electrico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, consumo_electrico $consumo_electrico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\consumo_electrico  $consumo_electrico
     * @return \Illuminate\Http\Response
     */
    public function destroy(consumo_electrico $consumo_electrico)
    {
        //
    }
}