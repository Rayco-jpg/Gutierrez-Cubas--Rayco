<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prenda;
use App\Models\prenda as ModelsPrenda;

class prendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prendas = prenda::all();
        return view('prendas.index', compact('prendas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('prendas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric|min:0|max:999.99',
        ]);

        Prenda::create($request->all());

        return redirect()->route('prendas.index')
            ->with('success', 'Prenda creada correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $prenda = Prenda::findOrFail($id);
        return view('prendas.show', compact('prenda'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $prenda = Prenda::findOrFail($id);
        return view('prendas.edit', compact('prenda'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'precio' => 'required|numeric|min:0|max:999.99',
        ]);

        $prenda = Prenda::findOrFail($id);
        $prenda->update($request->all());

        return redirect()->route('prendas.index')
            ->with('success', 'Prenda actualizada correctamente');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $prenda = Prenda::findOrFail($id);
        $prenda->delete();

        return redirect()->route('prendas.index')
            ->with('success', 'Prenda eliminada correctamente');
    }
}
