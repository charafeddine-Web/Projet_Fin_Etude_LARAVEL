<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salle;

class SalleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $salle = Salle::orderBy('created_at', 'DESC')->get();
        //$classe = Salle::paginate(10);  10 éléments par page
        return view('salles.index', compact('salle'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('salles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Salle::create($request->all());
        return redirect()->route('admin/salles')->with('success','Salles added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $salle = Salle::findOrFail($id);
        return view('salles.show', compact('salle'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $salle = Salle::findOrFail($id);
        return view('salles.edit', compact('salle'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $salle = Salle::findOrFail($id);
        $salle->update($request->all());
        return redirect()->route('admin/salles')->with('success', 'salle updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $salle = Salle::findOrFail($id);
        $salle->delete();
        return redirect()->route('admin/salles')->with('success', 'salle deleted successfully');
    }
    public function searchsalle(Request $request)
    {
        $query = $request->input('query');
        $salle = Salle::where('Nom_salle', 'like', "%$query%")->paginate(10); // Modifier selon vos besoins
        return view('salles.index', compact('salle'));
    }
}
