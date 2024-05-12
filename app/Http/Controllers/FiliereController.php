<?php

namespace App\Http\Controllers;
use App\Imports\FiliereImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Models\Filiere;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filiere = Filiere::orderBy('created_at', 'DESC')->get();
        $filiere = Filiere::paginate(10); 
        return view('filieres.index', compact('filiere'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('filieres.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données d'entrée
        $validatedData = $request->validate([
            'code_filiere' => 'required|integer|max:255',
            'Nom_Filiere' => 'required|string|max:255',
            'annee' => 'required|date',
        ]);
    
        // Vérifier s'il existe déjà une Module avec le même nom_Module
        $existingFiliere = Filiere::where([
            ['code_filiere', '=', $request->code_Filiere],
            ['Nom_Filiere', '=', $request->nom_Filiere],
            ['annee', '=', $request->Année],
        ])->first();
    
        if ($existingFiliere) {
            // La module existe déjà, rediriger avec un message d'erreur
            return redirect()->back()->with('errorfiliere', 'Le filiere avec le même nom et code existe déjà.');
        }
    
        // Créer la nouvelle module si aucune correspondance n'est trouvée
        Filiere::create($validatedData);
    
        // Rediriger avec un message de succès
        return redirect()->route('admin/filieres')->with('success', 'Filiere ajoutée avec succès.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $filiere = Filiere::findOrFail($id);
        return view('filieres.show', compact('filiere'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $filiere = Filiere::findOrFail($id);
        return view('filieres.edit', compact('filiere'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $filiere = Filiere::findOrFail($id);
        $filiere->update($request->all());
        return redirect()->route('admin/filieres')->with('success', 'filiere updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $filiere = Filiere::findOrFail($id);
        $filiere->delete();
        return redirect()->route('admin/filieres')->with('success', 'filiere deleted successfully');
    }
    public function Searchfiliere(Request $request)
    {
        $query = $request->input('keyword');
        $filiere = Filiere::where('Nom_Filiere', 'like', "%$query%")->paginate(10); 
        return view('filieres.index', compact('filiere'));
    }

    public function importExcel(Request $request)
    {
        // Vérifiez si un fichier a été envoyé
        if ($request->hasFile('file')) {
            // Importez le fichier en utilisant la module d'importation
            Excel::import(new FiliereImport, $request->file('file'));
            // Redirigez avec un message de succès
            return redirect()->back()->with('success', 'Fichier importé avec succès !');
        } else {
            // Gérez le cas où aucun fichier n'a été envoyé
            return redirect()->back()->with('error', 'Aucun fichier envoyé.');
        }
    }
}
