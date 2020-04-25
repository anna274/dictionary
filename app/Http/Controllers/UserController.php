<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit(User $user)
    {   
        $user = Auth::user();
        return view('users.edit', compact('user'));
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
}
