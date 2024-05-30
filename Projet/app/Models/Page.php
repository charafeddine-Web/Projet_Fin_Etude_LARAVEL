<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID_classe',
        'annee_formation',
        'date_debut',
        'date_fin',
        'content',
    ];

}
