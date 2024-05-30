<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_Module',
        'nom_Module',
    ];
    public function infoModules()
    {
        return $this->hasMany(InfoModule::class, 'codeModule');
    }

    public function dispenserParDefaut()
    {
        return $this->hasMany(Dispenser_par_défaut::class, 'codeModule');
    }
}






