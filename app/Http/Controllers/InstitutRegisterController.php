<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\InstitutRegisterSubmitted;
use App\Mail\RequestStatus;
// use App\Models\RequestStatus;
use App\Models\InstitutonRegister;
// use App\Models\Request;
use App\Models\consultantRegister;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class InstitutRegisterController extends Controller
{
    //
    public function store(Request $request)
    {
        // return "Done";
        $request->validate([
            'id_user' => 'required',
            'name' => 'required', //user name
            'place' => 'required',
            'HOCD' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'attachment' => 'required|mimes:pdf'
        ]);
        $attachment = $request-> attachment;
        $attachmentFile = time().'.'.$attachment->extension();
        $attachment->move(public_path('test'),$attachmentFile);

        
        $InstitutonRegister = new InstitutonRegister();
        $InstitutonRegister->id_user = $request->id_user;
        $InstitutonRegister->name = $request->name;
        $InstitutonRegister->place = $request->place;
        $InstitutonRegister->HOCD = $request->HOCD;
        $InstitutonRegister->phone = $request->phone;
        $InstitutonRegister->email = $request->email;
        $InstitutonRegister->attachment = $attachmentFile;
        $InstitutonRegister->save();

        Mail::to($InstitutonRegister->email)->send(new InstitutRegisterSubmitted($InstitutonRegister));
        return view('institution.successfulMessage');
    }

    public function show_Institution(){
        $data['institutions'] = InstitutonRegister::all();
        return view('admin.list-institution')->with($data);
    }


    public function inst(){
        $data['institutions'] = InstitutonRegister::all();
        return view('institution')->with($data);
    }

  
    
    function approved(Request $request){
        $data  = InstitutonRegister::find($request->id);
        $data->status = $request->status;
        $data->save();
        // Mail::to($InstitutonRegister->email)->send(new RequestStatus($data));
        return back();
    }
    
    public function showIntApprve(){
        $data['institutions'] = DB::table('instituton_registers')->where('status', 'Accept')->get();
        return view('victims.report')->with($data);
    }
    
    
}
