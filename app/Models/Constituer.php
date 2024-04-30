<?php

namespace App\Models;

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


}
