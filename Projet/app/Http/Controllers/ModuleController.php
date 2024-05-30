<?php

namespace App\Http\Controllers;
use App\Imports\ModuleImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Models\Module;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $module = Module::orderBy('created_at', 'DESC')->get();
        $module = Module::paginate(10);  //10 éléments par page
        return view('modules.index', compact('module'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('modules.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Valider les données d'entrée
        $validatedData = $request->validate([
            'code_Module' => 'required|integer|max:255',
            'nom_Module' => 'required|string|max:255',
        ]);
    
        // Vérifier s'il existe déjà une Module avec le même nom_Module
        $existingModule = Module::where([
            ['code_Module', '=', $request->code_Module],
            ['nom_Module', '=', $request->nom_Module],
        ])->first();
    
        if ($existingModule) {
            // La module existe déjà, rediriger avec un message d'erreur
            return redirect()->back()->with('errormodule', 'Le module avec le même nom et type existe déjà.');
        }
    
        // Créer la nouvelle module si aucune correspondance n'est trouvée
        Module::create($validatedData);
    
        // Rediriger avec un message de succès
        return redirect()->route('admin/modules')->with('success', 'Module ajoutée avec succès.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $module = Module::findOrFail($id);
        return view('modules.show', compact('module'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $module = Module::findOrFail($id);
        return view('modules.edit', compact('module'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $module = Module::findOrFail($id);
        $module->update($request->all());
        return redirect()->route('admin/modules')->with('success', 'module updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $module = Module::findOrFail($id);
        $module->delete();
        return redirect()->route('admin/modules')->with('success', 'module deleted successfully');
    }
    public function Searchmodule(Request $request)
    {
        $query = $request->input('keyword');
        $module = Module::where('nom_Module', 'like', "%$query%")->paginate(10); 
        return view('modules.index', compact('module'));
    }

    public function importExcel(Request $request)
    {
        // Vérifiez si un fichier a été envoyé
        if ($request->hasFile('file')) {
            // Importez le fichier en utilisant la module d'importation
            Excel::import(new ModuleImport, $request->file('file'));
            // Redirigez avec un message de succès
            return redirect()->back()->with('success', 'Fichier importé avec succès !');
        } else {
            // Gérez le cas où aucun fichier n'a été envoyé
            return redirect()->back()->with('error', 'Aucun fichier envoyé.');
        }
    }
}
