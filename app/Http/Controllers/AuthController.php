<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
class AuthController extends Controller
{
   
     public function loginas()
    {
        return view('login');
    }
    public function signup()
    {
        return view('signup');
    }
    public function insertas(Request $request)
    {
        $request->validate([
        'email' => 'required|email|max:50|unique:users',
        'password' => 'required|min:7'

        ],[
         'email.email' => 'not an email',
        'email.max' => 'email over 50 symbols',
        'email.unique' => 'email exists already',
        'password.min' => 'password must be 7 or more characters.',   
        'email.required' => 'cannot leave empty',
        'password.required' => 'password field cant be empty',
        ]);

        User::create([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return view('login');
    }
    public function checkas(Request $request)
    {
       $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:7'

        ],[
         'email.email' => 'not an email',
        'email.required' => 'cannot leave empty',
        'password.min' => 'password must be 7 or more characters.',   
        
        'password.required' => 'password field cant be empty',
        ]);

        if(Auth::attempt([ 'email' => $request->email, 'password' => $request->password]))
            {
                 $request->session()->regenerate();
                 
                return redirect('/');
            }
        else
            {
                return back()->withErrors('invalid pass or email');
            }


    }
    public function logout()
    {
         Auth::logout();
        return redirect('/login');
    }


}
