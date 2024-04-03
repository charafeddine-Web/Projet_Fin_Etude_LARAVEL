<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
 
class UserController extends Controller
{
    public function userprofile()
    {
        $user = Auth::user();
        return view('profile', ['user' => $user]);
        return view('userprofile');
    }
 
    public function emploi()
    {
        return view('emploi');
    }
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
 
        return view('userprofile', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $User = User::findOrFail($id);
 
        $User->update($request->all());
 
        return redirect()->route('/userprofile')->with('success', 'Profile updated successfully');
    }
}
