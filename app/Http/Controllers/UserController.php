<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $users = User::orderBy('isAdmin','desc')->paginate(5);
        return view('users.index', compact('users'));
    }

    public function show($id) {
        $user = User::find($id);
        return view('users.show')->withUser($user);
    }

    public function edit(User $user)
    {   
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }

    public function editPassword(User $user)
    {   
        $user = Auth::user();
        return view('users.edit_password', compact('user'));
    }

    public function update(User $user)
    { 
        if (Auth::user()->email == request('email')) {
        
            $this->validate(request(), [
                    'name' => 'required',
                ]);
        
                $user->name = request('name');
                $user->photoUrl = request('photoUrl');
        
                $user->save();
        
                return redirect()->route('home');
                
        } else {
                
            $this->validate(request(), [
                    'name' => 'required',
                    'email' => 'required|email|unique:users',
                ]);
        
                $user->name = request('name');
                $user->email = request('email');
                $user->photoUrl = request('photoUrl');
        
                $user->save();
        
                return redirect()->route('home');
                
        }
    }

    public function updatePassword(Request $request){

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
            Session::flash('attention', 'Your current password does not matches with the password you provided. Please try again.');
            return redirect()->back()->with("error","Your current password does not matches with the password you provided. Please try again.");
        }

        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
            Session::flash('attention',"New Password cannot be same as your current password. Please choose a different password.");
            return redirect()->back()->with("error","New Password cannot be same as your current password. Please choose a different password.");
        }

        $validatedData = $request->validate([
            'current-password' => 'required',
            'new-password' => 'required|string|min:8|confirmed',
        ]);

        $user = Auth::user();
        $user->password = bcrypt($request->get('new-password'));
        $user->save();

        Session::flash('success', 'Password changed successfully!');

        return redirect('/home');

    }

    public function changeStatus($id) {
        $user = User::find($id);
        $user->isAdmin = !$user->isAdmin;
        $user->save();
        Session::flash('success', 'Status was successfuly changed!');
        return back();
    }

    public function delete($id) {
        $user = User::find($id);
        $user->delete();
        Session::flash('success', 'User was successfuly deleted!');
        return redirect('/users');
    }

}
