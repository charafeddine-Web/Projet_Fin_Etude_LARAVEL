<?php
namespace App\Imports;
use App\Models\Salle;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Log;

class SalleImport implements ToModel
{
    public function model(array $row)
    {
        $existingSalle = Salle::where('Nom_Salle', $row[0])
        ->where('type_Salle', $row[1])
        ->first();

    if ($existingSalle) {
        Log::info("Salle '{$row[0]}' existe déjà et n'a pas été ajoutée.");
        return null; 
    }
        return new Salle([
            'Nom_Salle' => $row[0], 
            'type_Salle' => $row[1],
        ]);
    }
}
