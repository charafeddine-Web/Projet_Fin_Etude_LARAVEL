<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filiere extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_filiere',
        'Nom_Filiere',
        'annee'
       
    ];
   
    public function groupes()
    {
        return $this->hasMany(Classe::class, 'code_filiere');
    }
    
}
