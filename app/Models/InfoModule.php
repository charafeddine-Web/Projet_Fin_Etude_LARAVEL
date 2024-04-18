<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoModule extends Model
{
    use HasFactory;
    protected $fillable = [
        'annee_formation',
        'optimisé',
        'durée_Pres',
        'durée_Fad'
       
    ];
}
