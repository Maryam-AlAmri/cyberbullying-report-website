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
                <link rel="stylesheet" href="{{ asset('CSS/victims-report.css') }}">
                <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
                <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                <title>SCP</title>
            </head>
            <body>
              {{-- Divs  --}}
                {{-- <h1 class="title">Repotr<hr></h1><span></span>
                <p class="subtitle"> With the tremendous development in technology, new cybercrimes have emerged, such as the crime of electronic bullying that may face any user of the Internet, which is bullying using digital technologies, and it can occur on social media, messaging platforms, gaming platforms and mobile phones, and it is a recurring behavior aimed at frightening or provoking the targets.  With it, today's step, and the future of many, helping those in your organization, we encourage you to take a step for them and register your organization on our platform, so they can stop being silent and report you if they are being bullied online for their safety</p> 
                --}}
                </div>
                <div class="formDiv">
                    <div class="card">
                      <h1>Report Form</h1>
                      
                        <form method="POST" action="/createReport" enctype="multipart/form-data">
                          @csrf
                            {{-- ID --}}
                            <input class="w3-input w3-border w3-round-large" type="hidden" value="{{auth()->user()->id}}"  id="id" name="id" readonly><br>
                            
                            {{-- Name --}}
                            <label for="name">Name</label>
                            <input class="w3-input w3-border w3-round-large" type="text" value="{{auth()->user()->name}}" id="name" name="name" readonly><br><br>
                        
                            {{-- Email --}}
                            <label for="email">Email</label>
                            <input class="w3-input w3-border w3-round-large" type="email" value="{{auth()->user()->email}}" id="email" name="email" readonly><br>
           
                            {{-- Institution --}}
                            <label for="institution">Institution</label>
                            <select name="institution"  id="institution" class="form-control">
                              @foreach ($institutions as $institution)
                                <option value="{{$institution->id_user}}"required>{{$institution->name}}</option>
                              @endforeach
                            </select><br>

                            {{-- Bulling Type --}}
                            <label for="Bulling_Type">Bulling Type</label><br>
                            <input type="checkbox" id="offensive_comments" name="offensive_comments" value="Offensive comments">
                            <label for="Academic">Offensive comments</label>&nbsp;&nbsp;

                            <input type="checkbox" id="hate_speech" name="hate_speech" value="Hate speech">
                            <label for="Hate_speech">Hate Speech</label>&nbsp; &nbsp;

                            <input type="checkbox" id="pictorial_shaming" name="pictorial_shaming" value="Pictorial shaming">
                            <label for="Pictorial_shaming">Pictorial Shaming</label><br>

                            <input type="checkbox" id="spreading_rumors" name="spreading_rumors" value="Spreading rumors">
                            <label for="Spreading_rumors">Spreading Rumors</label>&nbsp;&nbsp;

                            <input type="checkbox" id="death_threat" name="death_threat" value="death threat">
                            <label for="death_threat">death threat</label>&nbsp;&nbsp;

                            <input type="checkbox" id="money_threat" name="money_threat" value="money threat">
                            <label for="money_threat">Money Threat</label>&nbsp;&nbsp;<br>
                            
                            <input type="checkbox" id="posting_videos" name="posting_videos" value="Posting or sharing embarrassing photos or videos">
                            <label for="Posting_videos">Posting or Sharing embarrassing photos or videos</label>&nbsp; &nbsp;
                            
                            <input type="checkbox" id="Other_forms" name="Other_forms" value="Other forms">
                            <label for="Other_forms">Other forms</label>&nbsp;&nbsp;<br><br>

                            {{-- Impact --}}
                            <label for="phone">Impact</label><br>

                            <input type="checkbox" id="Academic" name="Academic" value="Academic">
                            <label for="Academic">Academic</label>&nbsp; &nbsp; 

                            <input type="checkbox" id="Familial" name="Familial" value="Familial">
                            <label for="Familial">Familial</label>&nbsp; &nbsp;

                            <input type="checkbox" id="Financial" name="Financial" value="Financial">
                            <label for="Financial">Financial</label>&nbsp; &nbsp;

                            <input type="checkbox" id="Social" name="Social" value="Social">
                            <label for="Social">Social</label>&nbsp; &nbsp;

                            <input type="checkbox" id="Physical" name="Physical" value="Physical">
                            <label for="Physical">Physical</label>&nbsp; &nbsp;

                            <input type="checkbox" id="Phuchic" name="Phuchic" value="Phuchic">
                            <label for="Phuchic">Phuchic</label><br><br>
                        
                            <label for="details">Details</label></p>
                            <textarea id="details" name="details" rows="4" cols="50"></textarea><br><br>

                            {{-- ID --}}
                            <label for="evidence">Evidence</label>
                            <input class="w3-input w3-border w3-round-large" type="file" id="evidence" name="evidence" placeholder="Evidence ..." required>
                        <br>
                            <input type="submit" value="Submit">
                          </form>
                    </div>
                </div>
               
              
             {{-- Divs  --}}
            
             <!-- Footer Start Here  -->
             <div>
                <footer style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: azure; color: #53C289; text-align: center;">
                  <p> &#64; Cyberbullying 2022</p>
                </footer>
              </div>
            </body>
            </html>
            {{-- Code End here --}}
    </div>
</div>
@endsection
