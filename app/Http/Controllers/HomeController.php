<?php
 
namespace App\Http\Controllers;
use App\Models\Salle;
use App\Models\Professeur;
use App\Models\Classe;
use App\Models\Module;
use App\Models\Filiere;

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
        $filieres = Filiere::all();
        $classes = Classe::all();

        return view('dashboard', compact( "salles","professeurs","classes","modules","filieres"));   
     }



     public function loadForm()
     {
         $salles = Salle::all();
         $modules = Module::all();
         $professeurs = Professeur::all();
         
 
         return view('form', compact( "salles","professeurs","modules"));   
      }
     
}