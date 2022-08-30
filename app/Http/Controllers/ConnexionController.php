<?php

namespace App\Http\Controllers;

use App\Models\Connexion;
use App\Http\Requests\StoreConnexionRequest;
use App\Http\Requests\UpdateConnexionRequest;

class ConnexionController extends Controller
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
     * @param  \App\Http\Requests\StoreConnexionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConnexionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Connexion  $connexion
     * @return \Illuminate\Http\Response
     */
    public function show(Connexion $connexion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Connexion  $connexion
     * @return \Illuminate\Http\Response
     */
    public function edit(Connexion $connexion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateConnexionRequest  $request
     * @param  \App\Models\Connexion  $connexion
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateConnexionRequest $request, Connexion $connexion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Connexion  $connexion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Connexion $connexion)
    {
        //
    }
}
