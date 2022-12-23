<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\consultantRegister;
use App\Mail\victimReportSubmitted;
use App\Models\victimsReport;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\InstitutonRegister;

class VictimController extends Controller
{
    //
    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'institution' => 'required',
            // 'bulling_type' => 'required',
            // 'impact' => 'required',
            'details' => 'required',
            'evidence' => 'required|mimes:pdf'
        ]);
        // File
        $evidence = $request-> evidence;
        $evidenceFile = time().'.'.$evidence->extension();
        $evidence->move(public_path('evidence'),$evidenceFile);

        // Create Variable
        $name = $request->name;
        $email = $request->email;
        $institution = $request->institution;
        $offensive_comments = $request->offensive_comments;
        $hate_speech = $request->hate_speech ;
        $pictorial_shaming = $request->pictorial_shaming ;
        $spreading_rumors = $request-> spreading_rumors;
        $death_threat = $request->death_threat ;
        $money_threat = $request->money_threat ;
        $posting_videos = $request->posting_videos ;
        $Other_forms = $request->Other_forms ;
        $Academic = $request->Academic ;
        $Familial = $request->Familial ;
        $Financial = $request->Financial ;
        $Social = $request->Social ;
        $Physical = $request->Physical ;
        $Phuchic = $request->Phuchic ;
        $details = $request->details;
        // Bulling Type
        $bulling_type = '' ;
        if($offensive_comments != NULL){
            $bulling_type = $bulling_type .','.$offensive_comments;
        }
        if($hate_speech != NULL ){
            $bulling_type = $bulling_type.','.$hate_speech;
        } 
        if($pictorial_shaming != NULL ){
            $bulling_type = $bulling_type.','.$pictorial_shaming;
        }
        if($spreading_rumors != NULL ){
            $bulling_type = $bulling_type.','.$spreading_rumors;
        } 
        if($death_threat != NULL ){
            $bulling_type = $bulling_type.','.$death_threat;
        }
        if($money_threat != NULL ){
            $bulling_type = $bulling_type.','.$money_threat;
        }
        if($posting_videos != NULL ){
            $bulling_type = $bulling_type.','.$posting_videos;
        }
        if($Other_forms != NULL ){
            $bulling_type = $bulling_type.','.$Other_forms;
        }
        // Impact
        $impact = '';
        if($Academic != NULL ){
            $impact = $impact.','.$Academic;
        }
        if($Familial != NULL ){
            $impact = $impact.','.$Familial;
        }
        if($Financial != NULL ){
            $impact = $impact.','.$Financial;
        }
        if($Social != NULL ){
            $impact = $impact.','.$Social;
        }
        if($Physical != NULL ){
            $impact = $impact.','.$Physical;
        }
        if($Phuchic != NULL ){
            $impact = $impact.','.$Phuchic;
        }
        
        $victimsReport = new victimsReport();
        $victimsReport->name = $name;
        $victimsReport->email = $email;
        $victimsReport->institution = $institution;
        $victimsReport->bulling_type =$bulling_type;
        $victimsReport->impact =$impact;
        $victimsReport->details = $details;
        $victimsReport->evidence = $evidenceFile;
        $victimsReport->save();

        Mail::to($victimsReport->email)->send(new victimReportSubmitted($victimsReport));
        return back();
    }
    
    public function reportList(Request $request){
        $user = user::find($request->id);
        $id = $user->id;
        $data['reports'] = DB::table('victims_reports')->where('institution', $id)->get();
        return view('institution.reportList')->with($data);
        // return $id;
    }

    public function showData($id){
        $datavictims['victims'] = victimsReport::find($id);
        $dataCons['Consultants'] = DB::table('consultant_registers')->where('status', 'Accept')->get();
   
        return view("institution.selectedReport")->with($datavictims)->with($dataCons);
    }

    function creataDecision(Request $request){
        $data  = victimsReport::find($request->id);
        $Done = $request->Done;
        $ROP = $request->ROP;
        $Consulting = $request->Consulting;
        $Overall = '';
        if($Done != NULL ){
            $Overall = $Overall.' -'.$Done;
        }
        if($ROP != NULL ){
            $Overall = $Overall.' -'.$ROP;
        }
        if($Consulting != NULL ){
            $Overall = $Overall.' -'.$Consulting;
        }

        $data->Action = $request->Action;
        $data->ROP = $request->No_ROP;
        $data->consulting = $request->clinic;
        $data->Overall = $Overall;
        $data->decision_maker = $request->decision_maker;
        $data->consult_message = $request->consult_message;
        $data->save();
        // Mail::to($InstitutonRegister->email)->send(new RequestStatus($data));
        return view('institution.messages.TakeDecisionMessage');
    }

    public function requestListConsulting(Request $request){
        $user = user::find($request->id);
        $id = $user->id;
        $data['reports'] = DB::table('victims_reports')->where('consulting', $id)->get();
        // $inst = $data->institution;
        // $datainst['institutions'] = DB::table('instituton_registers')->where('id_user', $inst)->get();
        return view('consultant.requestList')->with($data);
        // return $id;
    }

    public function showDataReport($id){
        $datavictims['victims'] = victimsReport::find($id);
        return view("consultant.selectedRequest")->with($datavictims);
    }
    function creataDecisionTreatment(Request $request){
        $data  = victimsReport::find($request->id);
        $treatment = $request->treatment;
        $data->treatment = $treatment;
        $data->save();
        // Mail::to($InstitutonRegister->email)->send(new RequestStatus($data));
        return view('consultant.TakeDecisionMessage');
    }
}
