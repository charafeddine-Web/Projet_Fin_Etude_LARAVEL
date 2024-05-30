<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Password;
class AuthController extends Controller
{
 
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
 
    public function register()
    {
        return view('auth/register');
    }
 
    public function registerSave(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8'
        ])->validate();

     
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'type' => "0"
        ]);
 
        return redirect()->route('login');
    }
 
    public function login(Request $request, $token=null )
    {
        return view('auth/login')->with(['token' => $token]);
    }
 
    public function loginAction(Request $request)
    {
        Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ])->validate();
 
        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed')
            ]);
        }
 
        $request->session()->regenerate();
 
        if (auth()->user()->type == 'admin') {
            return redirect()->route('admin/Dashboard');
        } else {
            return redirect()->route('home');
        }
         
        // return redirect()->route('dashboard');
    }
 
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
 
        $request->session()->invalidate();
 
        return redirect('/login');
    }
 
    public function profile()
    {
        return view('userprofile');
    }




    public function showResetForm(Request $request, $token=null)
    {
        return view('auth.reset',['token' => $token,'email' => $request->email]);
    }


    public function resetPassword(Request $request)
    {
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:8',
        ]);
    
        // Vérifier si l'e-mail existe dans la base de données
        $user = User::where('email', $request->email)->first();
    
        if (!$user) {
            return back()->withErrors(['email' => ['Cet e-mail n\'appartient à aucun utilisateur. Veuillez fournir un e-mail valide.']])->withInput();
        }
    
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->save();
            }
        );
    
        if ($status == Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('status', 'Réinitialisation du mot de passe réussie');
        } else {
            return back()->withErrors(['email' => [trans($status)]])->withInput();
        }
    }
    
}

