<?php

namespace App\Http\Controllers;
use App\Imports\ProfesseurImport;
use Maatwebsite\Excel\Facades\Excel;
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
    // Valider les données d'entrée 
   /*$request->validate([
        'Nom_Professeur' => 'required|string|max:255',
        'Prenom_Professeur' => 'required|string|max:255',
        'Date_Naissance' => 'required|date',
        'Date_Recrutement' => 'required|date',
        'function' => 'required|string|max:255',
        'situation_familiale' => 'nullable|boolean',
        'Nombre_enfants' => 'required|integer',
        'secteur' => 'required|string|max:255',
        'grade' => 'required|integer',
        'echelle' => 'required|integer',
        'status' => 'nullable|boolean',
    ]);*/
 
    // Vérifier si un professeur existe déjà dans la base de données avec les mêmes valeurs pour les colonnes spécifiées
    $existingProfesseur = Professeur::where('Nom_Professeur', $request->Nom_Professeur)
                            ->where('Prenom_Professeur', $request->Prenom_Professeur)
                            ->where('Date_Naissance', $request->Date_Naissance)
                            ->first();
    
    // $existingProfesseur = Professeur::where([
    //     ['Nom_Professeur', '=', $request->Nom_Professeur],
    //     ['Prenom_Professeur', '=', $request->Prenom_Professeur],
    //     ['Date_Naissance', '=', $request->Date_Naissance],
        // ['Date_Recrutement', '=', $request->Date_Recrutement],
        // ['function', '=', $request->function],
        // ['situation_familiale', '=', $request->situation_familiale],
        // ['Nombre_enfants', '=', $request->Nombre_enfants],
        // ['secteur', '=', $request->secteur],
        // ['grade', '=', $request->grade],
        // ['echelle', '=', $request->echelle],
        // ['status', '=', $request->status]
    //])->first();
    
    
   
    if ($existingProfesseur) {
        // Le professeur existe déjà, rediriger avec un message d'erreur
        return redirect()->back()->with('errorprof', 'Le professeur avec les mêmes informations existe déjà dans la base de données.');
    }
    // Créer un nouveau professeur si aucune correspondance n'est trouvée
    Professeur::create($request->all());
    // Rediriger avec un message de succès
    return redirect()->route('admin/professeurs')->with('success', 'Professeur ajouté avec succès');
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

    // Récupère toutes les classes associées à cet prof
    public function showClasses($id)
    {
        $prof = Professeur::findOrFail($id);
        return view('professeurs.Classe_prof', ['prof' => $prof]);
    }
    //importation fichie excel
    public function importExcel(Request $request)
{
    // Vérifiez si un fichier a été envoyé
    if ($request->hasFile('file')) {
        // Importez le fichier en utilisant la prof d'importation
        Excel::import(new ProfesseurImport, $request->file('file'));
        // Redirigez avec un message de succès
        return redirect()->back()->with('success', 'Fichier importé avec succès !');
    } else {
        // Gérez le cas où aucun fichier n'a été envoyé
        return redirect()->back()->with('error', 'Aucun fichier envoyé.');
    }
}
}
