<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    // For each User
    public function adminIndex(){
        if(Auth::user()->type == 'admin')
        {
            return view('admin.admin-index');
        } else{
            Auth::logout();
            return redirect('login');
        }
    }

    public function institutionIndex(){
        if(Auth::user()->type == 'institution')
        {
            return view('institution.institution-index');
        } else{
            Auth::logout();
            return redirect('login');
        }
       
    }

    public function consultantIndex(){
        if(Auth::user()->type == 'consultant')
        {
            return view('consultant.consultant-index');
        } else{
            Auth::logout();
            return redirect('login');
        }
        
    }

    public function victimIndex(){
        if(Auth::user()->type == 'victim')
        {
            return view('victims.victim-index');
        } else{
            Auth::logout();
            return redirect('login');
        }
       
    }

}
