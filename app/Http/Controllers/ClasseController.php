<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;
use App\Imports\ClasseImport;
use Maatwebsite\Excel\Facades\Excel;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classe = Classe::orderBy('created_at', 'DESC')->get();
        $classe = Classe::paginate(7); // 10 éléments par page
        return view('classes.index', compact('classe'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('classes.create');
    }

    /**
     * Store a newly created resource in storage.
     */

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
        // La classe existe déjà, rediriger avec un message d'erreur
        return redirect()->back()->with('errorclasse', 'Une classe avec le même Nom_Classe et Annee_Formation existe déjà.');
    }

    // Créer une nouvelle instance de Classe
    Classe::create($request->all());

    // Rediriger avec un message de succès
    return redirect()->route('admin/classes')->with('success', 'Classe ajoutée avec succès');
}

/*    public function store(Request $request)
    {
        Classe::create($request->all());
        return redirect()->route('admin/classes')->with('success','Classe added successfully');
    }*/

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $classe = Classe::findOrFail($id);
 
        return view('classes.show', compact('classe'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $classe = Classe::findOrFail($id);
 
        return view('classes.edit', compact('classe'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $classe = Classe::findOrFail($id);
 
        $classe->update($request->all());
 
        return redirect()->route('admin/classes')->with('success', 'classe updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
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
    public function showprof($id)
    {
        $classe = Classe::findOrFail($id);
        return view('classes.Prof_classe', ['classe' => $classe]);
    }
//importation fichie excel
    public function importExcel(Request $request)
{
    // Vérifiez si un fichier a été envoyé
    if ($request->hasFile('file')) {
        // Importez le fichier en utilisant la classe d'importation
        Excel::import(new ClasseImport, $request->file('file'));
        // Redirigez avec un message de succès
        return redirect()->back()->with('success', 'Fichier importé avec succès !');
    } else {
        // Gérez le cas où aucun fichier n'a été envoyé
        return redirect()->back()->with('error', 'Aucun fichier envoyé.');
    }
}





}