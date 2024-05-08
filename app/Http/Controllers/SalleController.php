<?php

namespace App\Http\Controllers;
use App\Imports\SalleImport;
use Maatwebsite\Excel\Facades\Excel;
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
        $salle = Salle::paginate(10);  //10 éléments par page
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
        // Valider les données d'entrée
        $validatedData = $request->validate([
            'Nom_Salle' => 'required|string|max:255',
            'type_Salle' => 'required|string|max:255',
        ]);
    
        // Vérifier s'il existe déjà une salle avec le même Nom_Salle et type_Salle
        $existingSalle = Salle::where([
            ['Nom_Salle', '=', $request->Nom_Salle],
            ['type_Salle', '=', $request->type_Salle],
        ])->first();
    
        if ($existingSalle) {
            // La salle existe déjà, rediriger avec un message d'erreur
            return redirect()->back()->with('errorsalle', 'La salle avec le même nom et type existe déjà.');
        }
    
        // Créer la nouvelle salle si aucune correspondance n'est trouvée
        Salle::create($validatedData);
    
        // Rediriger avec un message de succès
        return redirect()->route('admin/salles')->with('success', 'Salle ajoutée avec succès.');
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
        $salle = Salle::where('Nom_Salle', 'like', "%$query%")->paginate(10); // Modifier selon vos besoins
        return view('salles.index', compact('salle'));
    }

    public function importExcel(Request $request)
    {
        // Vérifiez si un fichier a été envoyé
        if ($request->hasFile('file')) {
            // Importez le fichier en utilisant la salle d'importation
            Excel::import(new SalleImport, $request->file('file'));
            // Redirigez avec un message de succès
            return redirect()->back()->with('success', 'Fichier importé avec succès !');
        } else {
            // Gérez le cas où aucun fichier n'a été envoyé
            return redirect()->back()->with('error', 'Aucun fichier envoyé.');
        }
    }
}
