<?php

namespace App\Http\Controllers;

use App\Models\Opera;
use App\Http\Requests\StoreOperaRequest;
use App\Http\Requests\UpdateOperaRequest;

class OperaController extends Controller
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
     * @param  \App\Http\Requests\StoreOperaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOperaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Opera  $opera
     * @return \Illuminate\Http\Response
     */
    public function show(Opera $opera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Opera  $opera
     * @return \Illuminate\Http\Response
     */
    public function edit(Opera $opera)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOperaRequest  $request
     * @param  \App\Models\Opera  $opera
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOperaRequest $request, Opera $opera)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Opera  $opera
     * @return \Illuminate\Http\Response
     */
    public function destroy(Opera $opera)
    {
        //
    }
}
