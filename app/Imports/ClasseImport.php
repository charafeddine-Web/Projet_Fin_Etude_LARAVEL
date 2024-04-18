<?php
namespace App\Imports;
use App\Models\Classe;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Log;

class ClasseImport implements ToModel
{
    public function model(array $row)
    {
        $existingClass = Classe::where('Nom_Classe', $row[0])
        ->where('Annee_Formation', $row[1])
        ->where('Mode_Formation', $row[2])
        ->where('optimisé', $row[3])
        ->first();

    // Si la classe existe déjà, ne pas ajouter une nouvelle classe et afficher un message
    if ($existingClass) {
        Log::info("Classe '{$row[0]}' de l'année '{$row[1]}' existe déjà et n'a pas été ajoutée.");
        return null; // Ne rien retourner pour ne pas ajouter une nouvelle classe
    }
        return new Classe([
            'Nom_Classe' => $row[0], 
            'Annee_Formation' => $row[1],
            'Mode_Formation' => $row[2],
            'optimisé' => $row[3],
        ]);
    }
}
