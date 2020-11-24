<?php

namespace App\Http\Controllers;

use App\Models\dispositivos;
use Illuminate\Http\Request;

class DispositivosController extends Controller
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
     * @param  \App\Models\dispositivos  $dispositivos
     * @return \Illuminate\Http\Response
     */
    public function show(dispositivos $dispositivos)
    {
        $dispositivos = dispositivos::all();
        return view('project.dispositivos', compact('dispositivos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dispositivos  $dispositivos
     * @return \Illuminate\Http\Response
     */
    public function edit(dispositivos $dispositivos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dispositivos  $dispositivos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dispositivos $dispositivos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dispositivos  $dispositivos
     * @return \Illuminate\Http\Response
     */
    public function destroy(dispositivos $dispositivos)
    {
        //
    }
}