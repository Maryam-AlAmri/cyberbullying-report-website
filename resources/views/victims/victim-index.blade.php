@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
           {{-- My code Start Here --}}
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link rel="stylesheet" href="{{ asset('CSS/victims-home.css') }}">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
                <title>SCP</title>
            </head>
            <body>
                {{-- 1th div --}}
                <div class="row"  style="margin-top: 3%">
                       {{-- 1th div --}}
                    <div class="col-lg-3">
                        <div class="col-lg-12">
                            <div class="card">
                                <img src="{{ asset('image/report.png') }}" alt="Denim Jeans" style="width:90%;">
                                <h1 class="title">Report</h1><hr>
                                <p class="price">Free</p>
                                <p class="explain" style="margin-bottom: 15%; margin-top: 5%">You can report the institution you belong to</p>
                                <a  href="{{ ('/victims/report') }}" ><p><button class="button"><span>Report</span></button></p></a>
                            </div>
                        </div>
                    </div>

                {{-- 2th div --}}

                <div class="col-lg-3">
                    <div class="col-lg-12">
                        <div class="card">
                            <img src="{{ asset('image/awareness.png') }}" alt="Denim Jeans" style="width:100%; padding-bottom: 14%;">
                            <h1 class="title">Awareness</h1><hr>
                            <p class="price">Free</p>
                            <p class="explain" style="margin-bottom: 15%; margin-top: 5%">Read about the experiences of other victims</p>
                            <a  href="#" ><p><button class="button"><span>Read More</span></button></p></a>
                        </div>
                    </div>
                </div>
                {{-- 3th div --}}
                <div class="col-lg-3">
                    <div class="col-lg-12">
                        <div class="card">
                            <img src="{{ asset('image/consultant.png') }}" style="width:100%; padding-bottom: 13%;">
                            <h1 class="title">Contact </h1><hr>
                            <p class="price">Free</p>
                            <p class="explain" style="margin-bottom: 21%; margin-top: 5%">Chatting with your institution</p>
                            <a  href="{{ ('/chatify') }}" ><p><button class="button"><span>Chat</span></button></p></a>
                        </div>
                    </div>
                </div>
                {{-- 4th div --}}
                <div class="col-lg-3">
                    <div class="col-lg-12">
                        <div class="card">
                            <img src="{{ asset('image/awareness.png') }}" alt="Denim Jeans" style="width:100%; padding-bottom: 14%;">
                            <h1 class="title">Consultation</h1><hr>
                            <p class="price">Free</p>
                            <p class="explain" style="margin-bottom: 15%; margin-top: 5%">Read about the experiences of other victims</p>
                            <a href="{{ ('/chatify') }}" ><p><button class="button"><span>Read More</span></button></p></a>
                        </div>
                    </div>
                </div>
                
            {{-- ChatBot Start --}}
            <script>
                var botmanWidget = {
                aboutText: 'Ask me somthing',
                introMessage: "Hello {{auth()->user()->name}}✋,<br> I'm SCB Bot &#x1F916 <br> How I can help you?"
                };
              </script>
              
              <script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script>
            {{-- ChatBot End --}}
            
             <!-- Footer Start Here  -->
             <div>
                <footer style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: azure; color: #53C289; text-align: center;">
                  <p> &#64; Cyberbullying 2022</p>
                </footer>
              </div>
            </body>
            </html>

            
            {{-- My code end here  --}}
    </div>
</div>
@endsection