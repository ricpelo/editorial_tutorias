<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMonografiaRequest;
use App\Http\Requests\UpdateMonografiaRequest;
use App\Models\Monografia;

class MonografiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('monografias.index', [
            'monografias' => Monografia::paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('monografias.create', [
            'monografia' => new Monografia(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMonografiaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMonografiaRequest $request)
    {
        $monografia = new Monografia($request->validated());
        $monografia->save();

        return redirect()->route('monografias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function show(Monografia $monografia)
    {
        return view('monografias.show', [
            'monografia' => $monografia->withSum('articulos', 'num_paginas')->first(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function edit(Monografia $monografia)
    {
        return view('monografias.edit', [
            'monografia' => $monografia,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMonografiaRequest  $request
     * @param  \App\Models\Monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMonografiaRequest $request, Monografia $monografia)
    {
        $validated = $request->validated();
        $monografia->fill($validated);
        $monografia->save();

        return redirect()->route('monografias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Monografia  $monografia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Monografia $monografia)
    {
        $monografia->delete();

        return redirect()->route('monografias.index');
    }

    public function autores(Monografia $monografia)
    {
        return view('monografias.autores', [
            'monografia' => $monografia,
        ]);
    }
}
