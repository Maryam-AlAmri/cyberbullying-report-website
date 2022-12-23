@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        {{-- Code Start here --}}
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
            <link rel="stylesheet" href="{{ asset('CSS/reportStyle.css') }}">
            <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <title>SCP</title>
            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script>
            $(document).ready(function(){
                $('input[type="checkbox"]').click(function(){
                    var inputValue = $(this).attr("class");
                    var targetBox = $("." + inputValue);
                    // $(".box").not(targetBox).hide();
                    $(targetBox).show();
                });
            });
            </script>
        </head>
        <body>
           {{-- Divs  --}}
           <div class="formDiv">
            <div class="card">
              <h1>Decision Form</h1>
              
                <form method="POST" action="/creataDecision" enctype="multipart/form-data">
                  @csrf
                    {{-- ID --}}
                    <input type="hidden" value="{{$victims->id}}"  id="id" name="id" class="w3-input w3-border w3-round-large"><br>
                    
                    {{-- Name --}}
                    <label for="name">Name</label>
                    <input type="text" value="{{$victims->name}}" id="name" name="name" readonly class="w3-input w3-border w3-round-large"><br><br>
                
                    {{-- Email --}}
                    <label for="email">Email</label>
                    <input type="email" value="{{$victims->email}}" id="email" name="email" readonly class="w3-input w3-border w3-round-large"><br>
   
                    {{-- Bulling Type --}}
                    <label for="bulling_type">Bulling Type</label><br>
                    <input type="text" id="bulling_type" name="bulling_type" value="{{$victims->bulling_type}}" readonly class="w3-input w3-border w3-round-large"><br><br>

                    {{-- Impact --}}
                    <label for="impact">Impact</label><br>
                    <input type="text" id="impact" name="impact" value="{{$victims->impact}}" readonly class="w3-input w3-border w3-round-large"><br><br>
                   
                    <label for="details">Details</label>
                    <textarea id="details" name="details" rows="4" cols="50"  readonly>{{$victims->details}}</textarea><br><br>

                    <label for="Overall">Overall</label><br>

                    {{-- ============= select Action ============== --}}
                    <label><input type="checkbox" id="Done" name="Done" value="Done" class="Done">Done</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <label><input type="checkbox" id="ROP" name="ROP" value="ROP" class="ROP">Referred to the ROP</label>&nbsp;&nbsp;&nbsp;&nbsp;
                    <label><input type="checkbox" name="Consulting" value="Consulting" class="Consulting">Referred to the Medical Consulting</label><br>
                   
                    {{-- ============= For ROP ==================== --}}
                    <br><label for="ROP" class="box ROP">ROP</label><br>
                    <input class="box ROP" id="referrNo" name="No_ROP" class="referrNo" value="{{$victims->ROP}}" class="w3-input w3-border w3-round-large"/><br>
                    
                    {{-- ============= For Done ==================== --}}
                    <label for="Action" class="box Done">Action</label>
                    <textarea class="box Done" id="Action" name="Action" rows="4" cols="50">{{$victims->Action}}</textarea><br>
                   
                    {{-- ============= For consulting ==================== --}}
                    <label for="clinic" class="box Consulting">consulting</label>
                    <select name="clinic"  id="clinic" class="form-control box Consulting">
                      @foreach ($Consultants as $Consultant)
                        <option value="{{$Consultant->user_id}}"required>{{$Consultant->clinic_name}}</option>
                      @endforeach
                    </select><br><br>
                    <label for="clinic" class="box Consulting">Message</label>
                    <textarea class="box Consulting" id="consult_message" name="consult_message" rows="4" cols="50">{{$victims->Action}}</textarea>
                    <br><br>
                    
                    

                    <label for="decision_maker">The decision maker</label><br>
                    <input type="text" id="decision_maker" name="decision_maker" value="{{$victims->decision_maker}}" class="w3-input w3-border w3-round-large"><br>
                    {{-- ID --}}
                    {{-- <label for="evidence">Evidence</label>
                    <input class="w3-input w3-border w3-round-large" type="file" id="evidence" name="evidence" placeholder="Evidence ..." required> --}}
                    <input type="submit" value="Submit">
                  </form>
            </div>
        </div>
        
              
           {{-- Divs  --}}
            
           <!-- Footer Start Here  -->
           <div>
             <footer style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: azure; color: #53C289; text-align: center;z-index:-99">
                <p> &#64; Cyberbullying 2022</p>
             </footer>
            </div>
        </body>
        </html>
       {{-- Code End here --}}
 </div>
</div>
@endsection
