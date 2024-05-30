<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;
use App\Imports\ClasseImport;
use Maatwebsite\Excel\Facades\Excel;

class ClasseController extends Controller
{
   
    public function index()
    {
        $classe = Classe::orderBy('created_at', 'DESC')->get();
        $classe = Classe::paginate(7); 
        return view('classes.index', compact('classe'));
    }

    
    public function create()
    {
        
        return view('classes.create');
    }

    

     public function store(Request $request)
{
    // Valider les données d'entrée
    $request->validate([
        'Nom_Classe' => 'required|string|max:255',
        'Annee_Formation' => 'required|integer',
        'Mode_Formation' => 'required|string|max:255',
        'optimisé' => 'nullable|boolean',
    ]);

    // Vérifier si une classe avec le même Nom_Classe et Annee_Formation existe déjà
    $existingClass = Classe::where('Nom_Classe', $request->Nom_Classe)
                           ->where('Annee_Formation', $request->Annee_Formation)
                           ->first();

    if ($existingClass) {
        return redirect()->back()->with('errorclasse', 'Une classe avec le même Nom_Classe et Annee_Formation existe déjà.');
    }

    Classe::create($request->all());

    return redirect()->route('admin/classes')->with('success', 'Classe ajoutée avec succès');
}


    public function show(string $id)
    {
        $classe = Classe::findOrFail($id);
 
        return view('classes.show', compact('classe'));
    }

   
    public function edit(string $id)
    {
        $classe = Classe::findOrFail($id);
 
        return view('classes.edit', compact('classe'));
    }

 
    public function update(Request $request, string $id)
    {
        $classe = Classe::findOrFail($id);
 
        $classe->update($request->all());
 
        return redirect()->route('admin/classes')->with('success', 'classe updated successfully');
    }

   
    public function destroy(string $id)
    {
        $classe = Classe::findOrFail($id);
 
        $classe->delete();
 
        return redirect()->route('admin/classes')->with('success', 'classe deleted successfully');
    }
    
    public function searchClasse(Request $request)
    {
        
        $keyword = $request->input('keyword');
        $classe = Classe::where('Nom_Classe', 'like', "%$keyword%")->paginate(10); 
        return view('classes.index', compact('classe'));
        
    }
    // Récupère toutes les prof associées à cet classe
    // public function showprof($id)
    // {
    //     $classe = Classe::findOrFail($id);
    //     return view('classes.Prof_classe', ['classe' => $classe]);
    // }
    public function importExcel(Request $request)
{
    if ($request->hasFile('file')) {
        Excel::import(new ClasseImport, $request->file('file'));
        return redirect()->back()->with('success', 'Fichier importé avec succès !');
    } else {
        return redirect()->back()->with('error', 'Aucun fichier envoyé.');
    }
}





}