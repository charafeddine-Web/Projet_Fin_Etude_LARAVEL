<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispenser_par_défaut extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_Module',
        'mat',
    ];

    public function employe()
    {
        return $this->belongsTo(Professeur::class, 'mat');
    }

    public function module()
    {
        return $this->belongsTo(Module::class, 'codeModule');
    }

}
