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
                <link rel="stylesheet" href="{{ asset('CSS/InstitutionRegister.css') }}">
                <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
                <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                <title>SCP</title>
            </head>
            <body>
              {{-- Divs  --}}
                <p class="subtitle"> With the tremendous development in technology, new cybercrimes have emerged, such as the crime of electronic bullying that may face any user of the Internet, which is bullying using digital technologies, and it can occur on social media, messaging platforms, gaming platforms and mobile phones, and it is a recurring behavior aimed at frightening or provoking the targets.  With it, today's step, and the future of many, helping those in your organization, we encourage you to take a step for them and register your organization on our platform, so they can stop being silent and report you if they are being bullied online for their safety</p> 
               
                </div>
                <div class="formDiv">
                    <div class="card">
                      <h1>Institution Rergister Form</h1>
                      <h3>Hi {{auth()->user()->name}} , Please fill the following form </h3><br>
                        <form method="post" action="/institution/register" enctype="multipart/form-data">
                          @csrf
                            <input class="w3-input w3-border w3-round-large" type="hidden" value="{{auth()->user()->id}}" id="id_user" name="id_user" readonly>

                            <label for="HOCD">Head of the Consulting Department</label>
                            <input class="w3-input w3-border w3-round-large" type="text" id="HOCD" name="HOCD" placeholder="Head of the Consulting Department ..." >
                        
                            <label for="email">Office Email</label>
                            <input class="w3-input w3-border w3-round-large" type="email" value="{{auth()->user()->email}}" id="email" name="email" placeholder="Office Email ..." ><br>
                            
                            <label for="name">Institution Name</label>
                            <input class="w3-input w3-border w3-round-large" type="text"  id="name" name="name" placeholder="Institution name ... " required>

                            <label for="place">Place </label>
                            <input class="w3-input w3-border w3-round-large" type="text" id="place" name="place" placeholder="Place ...">
                                                    
                            <label for="phone">Office Phone Number</label>
                            <input class="w3-input w3-border w3-round-large" type="text" id="phone" name="phone" placeholder="Office Phone Number ..." required><br><br>
                           
                            <label for="attachment">Substantiation</label>
                            <input class="w3-input w3-border w3-round-large" type="file" id="attachment" name="attachment" placeholder="substantiation ..." required>
                            <small>*PDF Form</small>
                            <br><br>
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
