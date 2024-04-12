<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professeur;

class ProfesseurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $professeur = Professeur::orderBy('created_at', 'DESC')->get();
        $professeur = Professeur::paginate(10);  //10 éléments par page
        return view('professeurs.index', compact('professeur'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('professeurs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Professeur::create($request->all());
        return redirect()->route('admin/professeurs')->with('success','Professeur added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $professeur = Professeur::findOrFail($id);
        return view('professeurs.show', compact('professeur'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $professeur = Professeur::findOrFail($id);
        return view('professeurs.edit', compact('professeur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $professeur = Professeur::findOrFail($id);
        $professeur->update($request->all());
        return redirect()->route('admin/professeurs')->with('success', 'professeur updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $professeur = Professeur::findOrFail($id);
        $professeur->delete();
        return redirect()->route('admin/professeurs')->with('success', 'professeur deleted successfully');
    }
    public function searchprofesseur(Request $request)
    {
        $query = $request->input('query');
        $professeur = Professeur::where('Nom_Professeur', 'like', "%$query%")->paginate(10); 
        return view('professeurs.index', compact('professeur'));
    }
}
