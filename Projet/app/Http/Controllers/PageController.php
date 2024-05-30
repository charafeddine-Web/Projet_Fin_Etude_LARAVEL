<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;
use App\Exports\DernierExport;
use Maatwebsite\Excel\Facades\Excel;

class PageController extends Controller
{
   

    public function save(Request $request)
    {
        $request->validate([
            'ID_classe' => 'required|integer',
            'annee_formation' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
        ]);

        try {
            $page = new Page();
            $page->ID_classe = $request->input('ID_classe');
            $page->annee_formation = $request->input('annee_formation');
            $page->date_debut = $request->input('date_debut');
            $page->date_fin = $request->input('date_fin');
            $page->save();

            return redirect()->route('dashboard')->with('success', 'Page saved successfully!');
        } catch (\Exception $e) {
            return redirect()->route('dashboard')->with('error', 'Failed to save page: ' . $e->getMessage());
        }
    }

    public function export()
    {
        return Excel::download(new DernierExport, 'Emploi.xlsx');
    }
}
