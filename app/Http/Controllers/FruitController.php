<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use App\Http\Requests\StoreFruitRequest;
use App\Http\Requests\UpdateFruitRequest;

class FruitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fruits = Fruit::all();
        return view('pages/fruits/index', compact('fruits'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.fruits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFruitRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFruitRequest $request)
    {
        $fruit = new Fruit();
        $fruit->fill($request->all());
        $fruit->save();
        return redirect('success')->with('message', "Sikeresen hozzáadva!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fruit = Fruit::find($id);
        if (is_null($fruit)){
            return redirect('danger')->with('message', "Ilyen azonosítóval nem található gyümölcs!");
        }
        return view('pages.fruits.show', compact('fruit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fruit = Fruit::find($id);
        if (is_null($fruit)){
            return redirect('danger')->with('message', "Ilyen azonosítóval nem található gyümölcs!");
        }
        return view('pages.fruits.edit', compact('fruit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFruitRequest  $request
     * @param  \App\Models\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFruitRequest $request, $id)
    {
        $fruit = Fruit::find($id);
        if (is_null($fruit)){
            return redirect('danger')->with('message', "Ilyen azonosítóval nem található gyümölcs!");
        }
        $fruit->name = $request->input('name');
        $fruit->color = $request->input('color');
        $fruit->taste = $request->input('taste');
        $fruit->weight = $request->input('weight');
        $fruit->purch_date = $request->input('purch_date');
        $fruit->update();
        return redirect('success')->with('message', "A gyümölcs módosítása sikeres!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fruit = Fruit::find($id);
        if (is_null($fruit)){
            return redirect('danger')->with('message', "Ilyen azonosítóval nem található gyümölcs!");
        }
        $fruit->delete();
        return redirect('success')->with('message', "A gyümölcs törlése sikeres!");
    }
}
