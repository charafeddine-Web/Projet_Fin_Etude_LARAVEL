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



}
