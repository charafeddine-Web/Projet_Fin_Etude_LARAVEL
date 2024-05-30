<?php
namespace App\Imports;
use App\Models\Professeur;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Log;

class ProfesseurImport implements ToModel
{
    public function model(array $row)
    {
        $existingProfesseur = Professeur::where('Nom_Professeur', $row[0])
        ->where('Prenom_Professeur', $row[1])
        ->where('Date_Naissance', $row[2])
        ->where('Date_Recrutement', $row[3])
        ->where('function', $row[4])
        ->where('situation_familiale', $row[5])
        ->where('Nombre_enfants', $row[6])
        ->where('secteur', $row[7])
        ->where('grade', $row[8])
        ->where('echelle', $row[9])
        ->where('status', $row[10])
        ->first();

    // Si la prof existe déjà, ne pas ajouter une nouvelle classe et afficher un message
    if ($existingProfesseur) {
        Log::info("Professeur '{$row[0]}'  '{$row[1]}' existe déjà et n'a pas été ajoutée.");
        return null; // Ne rien retourner pour ne pas ajouter une nouvelle prof
    }
        return new Professeur([
            'Nom_Professeur' => $row[0], 
            'Prenom_Professeur' => $row[1],
            'Date_Naissance' => $row[2],
            'Date_Recrutement' => $row[3],
            'function' => $row[4],
            'situation_familiale' => $row[5],
            'Nombre_enfants' => $row[6],
            'secteur' => $row[7],
            'grade' => $row[8],
            'echelle' => $row[9],
            'status' => $row[10],
        ]);
    }
}
