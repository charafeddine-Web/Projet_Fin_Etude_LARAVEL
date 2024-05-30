<?php

namespace App\Http\Controllers;
use App\Imports\ProfesseurImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Models\Professeur;

class ProfesseurController extends Controller
{
    
    public function index()
    {
        $professeur = Professeur::orderBy('created_at', 'DESC')->get();
        $professeur = Professeur::paginate(10);  
        return view('professeurs.index', compact('professeur'));
    }

   
    public function create()
    {
        return view('professeurs.create');
    }

   
    public function store(Request $request)
{
     
   $request->validate([
        'Nom_Professeur' => 'required|string|max:255',
        'Prenom_Professeur' => 'required|string|max:255',
        'Date_Naissance' => 'required|date',
        'Date_Recrutement' => 'required|date',
        //'function' => 'required|string|max:255',
        //'situation_familiale' => 'nullable|boolean',
    //    'Nombre_enfants' => 'required|integer',
    //     'secteur' => 'required|string|max:255',
    //    'grade' => 'required|integer',
    //     'echelle' => 'required|integer',
    //     'status' => 'nullable|boolean',
    ]);
 
    $existingProfesseur = Professeur::where('Nom_Professeur', $request->Nom_Professeur)
                            ->where('Prenom_Professeur', $request->Prenom_Professeur)
                            ->where('Date_Naissance', $request->Date_Naissance)
                            ->first();
    

    
    
   
    if ($existingProfesseur) {
        return redirect()->back()->with('errorprof', 'Le professeur avec les mêmes informations existe déjà dans la base de données.');
    }
    Professeur::create($request->all());
    return redirect()->route('admin/professeurs')->with('success', 'Professeur ajouté avec succès');
}

    public function show(string $id)
    {
        $professeur = Professeur::findOrFail($id);
        return view('professeurs.show', compact('professeur'));
    }

    
    public function edit(string $id)
    {
        $professeur = Professeur::findOrFail($id);
        return view('professeurs.edit', compact('professeur'));
    }

    public function update(Request $request, string $id)
    {
        $professeur = Professeur::findOrFail($id);
        $professeur->update($request->all());
        return redirect()->route('admin/professeurs')->with('success', 'professeur updated successfully');
    }

  
    public function destroy(string $id)
    {
        $professeur = Professeur::findOrFail($id);
        $professeur->delete();
        return redirect()->route('admin/professeurs')->with('success', 'professeur deleted successfully');
    }
    public function searchprofesseur(Request $request)
    {
        $query = $request->input('keyword');
        $professeur = Professeur::where('Nom_Professeur', 'like', "%$query%")->paginate(10); 
        return view('professeurs.index', compact('professeur'));
    }

    // // Récupère toutes les classes associées à cet prof
    // public function showClasses($id)
    // {
    //     $prof = Professeur::findOrFail($id);
    //     return view('professeurs.Classe_prof', ['prof' => $prof]);
    // }
    //importation fichie excel
    public function importExcel(Request $request)
{
    if ($request->hasFile('file')) {
        Excel::import(new ProfesseurImport, $request->file('file'));
        return redirect()->back()->with('success', 'Fichier importé avec succès !');
    } else {
        return redirect()->back()->with('error', 'Aucun fichier envoyé.');
    }
}
}
