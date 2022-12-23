<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            return $this->redirecAfterLogin();
            
        }

        return redirect('login');
       
        // return "incorrect email or password";
        // return $this->login($request );
    }

    private function redirecAfterLogin()
    {
        if(Auth::user()->type == 'admin')
        {
            return redirect('/admin');
        }
        else if(Auth::user()->type == 'institution')
        {
            return redirect('/institution');
        }
        else if(Auth::user()->type == 'consultant')
        {
            return redirect('/consultant');
        }
        else if(Auth::user()->type == 'victim')
        {
            return redirect('/victim');
        }

        else{
            Auth::logout();
            return redirect('login');
        }
    }

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required', 'unique:users'],
            'email' => ['required', 'email', 'unique:users'],// To check if the email take it before 
            'type' => ['required'],
            'password' => ['required'],
        ]);

        $user = new User;
        $user->name =  $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->password = Hash::make($request->password); 
        $user->save();

        
        return $this->login($request);
    }

    public function victims_Report($id){
        $data = user::find($id);
        return view('/victims/report', ['user'=>$data]);
    }
   
}
