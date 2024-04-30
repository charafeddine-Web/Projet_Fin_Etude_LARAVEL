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
    public function classe()
    {
        return $this->belongsToMany(Classe::class,'former_par_défaut', 'professeur_id','classe_id');
    }
    public function modules()
    {
        return $this->hasMany('App\Module');
    }
}

