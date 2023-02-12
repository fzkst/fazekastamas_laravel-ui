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
        $operas = Opera::all();
        return view('pages/operas/index', compact('operas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.operas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOperaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOperaRequest $request)
    {
        $opera = new Opera();
        $opera->fill($request->all());
        $opera->save();
        return redirect('success')->with('message', "Sikeresen hozzáadva!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Opera  $opera
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $opera = Opera::find($id);
        if (is_null($opera)){
            return redirect('danger')->with('message', "Ilyen azonosítóval nem található opera!");
        }
        return view('pages.operas.show', compact('opera'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Opera  $opera
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $opera = Opera::find($id);
        if (is_null($opera)){
            return redirect('danger')->with('message', "Ilyen azonosítóval nem található gyümölcs!");
        }
        return view('pages.operas.edit', compact('opera'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOperaRequest  $request
     * @param  \App\Models\Opera  $opera
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOperaRequest $request, $id)
    {
        $opera = Opera::find($id);
        if (is_null($opera)){
            return redirect('danger')->with('message', "Ilyen azonosítóval nem található opera!");
        }
        $opera->name = $request->input('name');
        $opera->country = $request->input('country');
        $opera->city = $request->input('city');
        $opera->const_time = $request->input('const_time');
        $opera->seats_count = $request->input('seats_count');
        $opera->update();
        return redirect('success')->with('message', "Az opera módosítása sikeres!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Opera  $opera
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $opera = Opera::find($id);
        if (is_null($opera)){
            return redirect('danger')->with('message', "Ilyen azonosítóval nem található opera!");
        }
        $opera->delete();
        return redirect('success')->with('message', "Az opera törlése sikeres!");
    }
}
