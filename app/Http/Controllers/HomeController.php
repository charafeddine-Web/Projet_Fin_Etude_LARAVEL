<?php
 
namespace App\Http\Controllers;
use App\Models\Salle;
use App\Models\Professeur;
use App\Models\Classe;
use App\Models\Module;

use Illuminate\Http\Request;
 
class HomeController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        return view('home');
    }
   
    public function Emploi()
    {
        $salles = Salle::all();
        $modules = Module::all();
        $professeurs = Professeur::all();
        $classes = Classe::all();

        return view('dashboard', compact( "salles","professeurs","classes","modules"));   
     }
}