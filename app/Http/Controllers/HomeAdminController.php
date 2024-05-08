<?php
 
namespace App\Http\Controllers;
use App\Models\Salle;
use App\Models\Professeur;
use App\Models\Classe;
use App\Models\Module;
use App\Models\User;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
 
class HomeAdminController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        return view('Home-Admin');
    }
   
    public function adminHome()
    {
        $salles = Salle::all();
        $modules = Module::all();
        $professeurs = Professeur::all();
        $classes = Classe::all();
        $userss = User::all();
        $users = User::paginate(8);

        return view('Home-admin', compact( "salles","professeurs","classes","modules","users","userss"));   
     }
}