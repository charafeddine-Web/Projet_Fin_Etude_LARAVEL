<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
   
    use HasFactory;
    protected $fillable = [
        'Nom_Classe',
        'Annee_Formation',
        'Mode_Formation',
        'optimisé'
    ];
   // Définition de la relation many-to-many avec le modèle professeur
   public function professeur()
   {
       return $this->belongsToMany(Professeur::class, 'former_par_défaut', 'classe_id', 'professeur_id');
   }
  
}
