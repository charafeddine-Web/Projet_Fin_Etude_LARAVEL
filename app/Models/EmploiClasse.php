<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmploiClasse extends Model
{
    use HasFactory;
    protected $fillable = [
        'annee_Formation',
        'date_debut',
        'date_fin'
       
    ];
}
