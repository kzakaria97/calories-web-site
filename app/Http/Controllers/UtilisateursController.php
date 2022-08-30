<?php

namespace App\Http\Controllers;

use App\Models\Utilisateurs;
use App\Http\Requests\StoreUtilisateursRequest;
use App\Http\Requests\UpdateUtilisateursRequest;

class UtilisateursController extends Controller
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
     * @param  \App\Http\Requests\StoreUtilisateursRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUtilisateursRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Utilisateurs  $utilisateurs
     * @return \Illuminate\Http\Response
     */
    public function show(Utilisateurs $utilisateurs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Utilisateurs  $utilisateurs
     * @return \Illuminate\Http\Response
     */
    public function edit(Utilisateurs $utilisateurs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUtilisateursRequest  $request
     * @param  \App\Models\Utilisateurs  $utilisateurs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUtilisateursRequest $request, Utilisateurs $utilisateurs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Utilisateurs  $utilisateurs
     * @return \Illuminate\Http\Response
     */
    public function destroy(Utilisateurs $utilisateurs)
    {
        //
    }
}
