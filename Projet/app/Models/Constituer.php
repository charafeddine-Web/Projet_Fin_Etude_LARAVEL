<?php

namespace App\Models;
use App\Models\Salle;
use App\Models\InfoModule;
use App\Models\Professeur;
use App\Models\EmploiClasse;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constituer extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_info',
        'Mat_prof',
        'id_emploi',
        'id_salle',
        'HeureDébut',
        'HeureFin',
        'ModeSéance',
        
    ];
    public function infoModule()
    {
        return $this->belongsTo(InfoModule::class, 'id_info');
    }

    public function professeur()
    {
        return $this->belongsTo(Professeur::class, 'Mat_prof');
    }

    public function emploiClasse()
    {
        return $this->belongsTo(EmploiClasse::class, 'id_emploi');
    }
    public function salle()
    {
        return $this->belongsTo(Salle::class, 'id_salle');
    }


}
