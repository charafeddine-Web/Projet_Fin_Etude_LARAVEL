<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professeur extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nom_Professeur',
        'Prenom_Professeur',
        'Date_Naissance',
        'Date_Recrutement',
        'function',
        'situation_familiale',
        'Nombre_enfants',
        'secteur',
        'grade',
        'echelle',
        'status',
    ];
}
