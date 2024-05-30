<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoModule extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_module',
        'annee_formation',
        'optimisé',
        'durée_Pres',
        'durée_Fad'
       
    ];
    public function module()
    {
        return $this->belongsTo(Module::class, 'codeModule');
    }

    public function constituer()
    {
        return $this->hasMany(Constituer::class, 'id_info');
    }
}
