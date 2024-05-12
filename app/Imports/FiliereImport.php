<?php
namespace App\Imports;
use App\Models\Filiere;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Log;

class FiliereImport implements ToModel
{
    public function model(array $row)
    {
        $existingFiliere = Filiere::where('code_filiere', $row[0])
        ->where('Nom_Filiere', $row[1])
        ->where('annee', $row[2])
        ->first();

    if ($existingFiliere) {
        Log::info("Filiere '{$row[0]}' existe déjà et n'a pas été ajoutée.");
        return null; 
    }
        return new Filiere([
            'code_filiere' => $row[0], 
            'Nom_Filiere' => $row[1], 
            'annee' => $row[2], 
        ]);
    }
}
