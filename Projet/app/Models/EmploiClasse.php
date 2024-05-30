<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploiClasse extends Model
{
    use HasFactory;
    protected $fillable = [
        "ID_class",
        'annee_Formation',
        'date_debut',
        'date_fin'
       
    ];
    public function groupe()
    {
        return $this->belongsTo(Classe::class, 'ID');
    }
}
