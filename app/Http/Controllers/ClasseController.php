<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Classe;

class ClasseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $classe = Classe::orderBy('created_at', 'DESC')->get();
        $classe = Classe::paginate(10); // 10 éléments par page
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
        Classe::create($request->all());
        return redirect()->route('admin/classes')->with('success','Classe added successfully');
    }

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
        $classe = Classe::where('Nom_Classe', 'like', "%$keyword%")->paginate(10); // Modifier selon vos besoins
        return view('classes.index', compact('classe'));
        
    }
}
