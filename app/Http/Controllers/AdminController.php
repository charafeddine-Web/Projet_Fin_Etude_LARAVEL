<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
 
class AdminController extends Controller
{
    public function profilepage() {
           $user = Auth::user();
          return view('profile', ['user' => $user]);
   
        //return view('profile');
    }
   public function edit(string $id)
    {
        $user = User::findOrFail($id);
 
        return view('profile', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $User = User::findOrFail($id);
 
        $User->update($request->all());
 
        return redirect()->route('admin/profile')->with('success', 'Profile updated successfully');
    }
}