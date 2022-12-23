<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\consultantRegister;
use Illuminate\Support\Facades\Mail;
use App\Mail\ConsultantsRegisterSubmitted;
use Illuminate\Support\Facades\DB;
class ConsultantController extends Controller
{
    //
    public function store(Request $request)
    {
        // return "Done";
        $request->validate([
            'user_id' => 'required',
            'clinic_name' => 'required', //user name
            'email' => 'required',
            'phone' => 'required',
            'place' => 'required',
            'work_timing' => 'required',
            'location' => 'required',
            'attachment' => 'required|mimes:pdf'
        ]);
        $attachment = $request-> attachment;
        $attachmentFile = time().'.'.$attachment->extension();
        $attachment->move(public_path('consultAttach'),$attachmentFile);

        //Days
        $Sun = $request->Sun;
        $Mon = $request->Mon;
        $Tue = $request->Tue;
        $Wed = $request->Wed;
        $Thur = $request->Thur;
        $Fri = $request->Fri;
        $Sat = $request->Sat;
        $workdays = '';
        if($Sun != NULL){
            $workdays = $workdays . ' - ' . $Sun;
        }if($Mon != NULL){
            $workdays = $workdays . ' - ' . $Mon;
        }if($Tue != NULL){
            $workdays = $workdays . ' - ' . $Tue;
        }if($Wed != NULL){
            $workdays = $workdays . ' - ' . $Wed;
        }if($Thur != NULL){
            $workdays = $workdays . ' - ' . $Thur;
        }if($Fri != NULL){
            $workdays = $workdays . ' - ' . $Fri;
        }if($Sat != NULL){
            $workdays = $workdays . ' - ' . $Sat;
        }
        $consultantRegister = new consultantRegister();
        $consultantRegister->user_id = $request->user_id;
        $consultantRegister->drName = $request->drName;
        $consultantRegister->clinic_name = $request->clinic_name;
        $consultantRegister->email = $request->email;
        $consultantRegister->phone = $request->phone;
        $consultantRegister->place = $request->place;
        $consultantRegister->work_timing = $request->work_timing;
        $consultantRegister->workdays = $workdays;
        $consultantRegister->location = $request->location;
        $consultantRegister->attachment = $attachmentFile;
        $consultantRegister->save();

        Mail::to($consultantRegister->email)->send(new ConsultantsRegisterSubmitted($consultantRegister));
        return view('consultant.successfulMessage');
    }
    
    public function show_Consultant(){
        $data['Consultants'] = consultantRegister::all();
        return view('admin.list-Consultant')->with($data);
    }

    function approved(Request $request){
        $data  = consultantRegister::find($request->id);
        $data->status = $request->status;
        $data->save();
        // Mail::to($InstitutonRegister->email)->send(new RequestStatus($data));
        return back();
    }

    public function showConApprve(){
        $data['Consultants'] = DB::table('consultant_registers')->where('status', 'Accept')->get();
        return view('institution.selectedReport')->with($data);
    }

    

}
