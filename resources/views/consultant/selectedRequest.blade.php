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
              
                <form method="POST" action="/creataDecisionTreatment" enctype="multipart/form-data">
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
                 
                    {{-- From here will save --}}
                    <label for="consult_message">Institution Message</label><br>
                    <textarea id="consult_message" name="consult_message" rows="10" cols="50">{{$victims->consult_message}}</textarea><br><br>
                    
                    <label for="treatment">Treatment plan</label><br>
                    <textarea  id="treatment" name="treatment" rows="4" cols="50"></textarea><br><br>
                    

                 
                    <label for="dr_treatment">Doctor Name</label><br>
                    <input type="text" id="dr_treatment" name="dr_treatment" value="{{auth()->user()->name}}" class="w3-input w3-border w3-round-large"><br>
                    {{-- ID --}}
                    {{-- <label for="evidence">Evidence</label>
                    <input class="w3-input w3-border w3-round-large" type="file" id="evidence" name="evidence" placeholder="Evidence ..." required> --}}
                    <a  href="{{ ('chatify/')}}" ><input type="button" value="Chat Victims" class="buttom"></a>
                    <input type="submit" value="Submit">
                  </form>
            </div>
        </div>
        
              
           {{-- Divs  --}}
            
           <!-- Footer Start Here  -->
           <div>
             <footer style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: azure; color: #53C289; text-align: center;z-index:99">
                <p> &#64; Cyberbullying 2022</p>
             </footer>
            </div>
        </body>
        </html>
       {{-- Code End here --}}
 </div>
</div>
@endsection
