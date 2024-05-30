<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class former_par_défaut extends Model
{
    use HasFactory;
    protected $fillable = [
        'professeur_id',
        'classe_id',
    ];
    public function employe()
    {
        return $this->belongsTo(Professeur::class, 'mat');
    }

    public function groupe()
    {
        return $this->belongsTo(Classe::class, 'ID');
    }
}

