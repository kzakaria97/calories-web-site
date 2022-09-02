<?php

namespace App\Http\Controllers;

use App\Models\test;
use App\Http\Requests\StoreTDEEDataRequest;
use App\Http\Requests\UpdateTDEEDataRequest;

class TDEEDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(
            )
    {
$userDuController = test::all();
return view('Stats', compact('userDuController'));
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
     * @param  \App\Http\Requests\StoreTDEEDataRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTDEEDataRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TDEEData  $tDEEData
     * @return \Illuminate\Http\Response
     */
    public function show(TDEEData $tDEEData)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TDEEData  $tDEEData
     * @return \Illuminate\Http\Response
     */
    public function edit(TDEEData $tDEEData)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTDEEDataRequest  $request
     * @param  \App\Models\TDEEData  $tDEEData
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTDEEDataRequest $request, TDEEData $tDEEData)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TDEEData  $tDEEData
     * @return \Illuminate\Http\Response
     */
    public function destroy(TDEEData $tDEEData)
    {
        //
    }
}
