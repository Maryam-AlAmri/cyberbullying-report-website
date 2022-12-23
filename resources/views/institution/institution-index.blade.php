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
                <link rel="stylesheet" href="{{ asset('CSS/Institution-home.css') }}">
                <title>SCP</title>
            </head>
            <body>
              {{-- Divs  --}}
             {{-- First Row --}}
             <div class="row"  style="margin-top: 5%">
                {{-- 1th div --}}
                <div class="col-lg-3">
                    <div class="col-lg-12">
                        <div class="card">
                            <img src="{{ asset('image/institution-list.png') }}" alt="Denim Jeans" style="width:100%; padding-bottom: 20%;">
                            <h1 class="title">Register</h1><hr>
                            <p class="explain" style="margin-bottom: 15%; margin-top: 5%">Register your Institution</p>
                            <a  href="{{ ('/institution-register') }}" ><p><button class="button"><span>Register</span></button></p></a>
                        </div>
                    </div>
                </div>

                {{-- 2th div --}}
                <div class="col-lg-3">
                    <div class="col-lg-12">
                        <div class="card">
                            <img src="{{ asset('image/victims-list.png') }}" alt="Denim Jeans" style="width:100%;">
                            <h1 class="title">Reports</h1><hr>
                            <p class="explain" style="margin-bottom: 15%; margin-top: 5%">View All Reporting List</p>
                                <form action="/institution/report/list" method="post">
                                    @csrf
                                    <input class="w3-input w3-border w3-round-large" type="hidden" value="{{auth()->user()->id}}"  name="id">
                                    <p>
                                        <button class="button" type="submit"><span>View</span></button>
                                    </p>
                                </form>
                        </div>
                    </div>
                </div>

                {{-- 3th div --}}
                <div class="col-lg-3">
                    <div class="col-lg-12">
                       <div class="card">
                           <img src="{{ asset('image/Consultant-list.png') }}" alt="Denim Jeans" style="width:100%; padding-bottom: 15%;">
                           <h1 class="title">Contact Victims</h1><hr>
                           <p class="explain" style="margin-bottom: 15%; margin-top: 5%">Chatting with Victims in your institution</p>
                           <a  href="{{ ('/chatify') }}" ><p><button class="button"><span>Chat</span></button></p></a>
                       </div>
                   </div>
               </div>

               {{-- 4th div --}}
               <div class="col-lg-3">
                <div class="col-lg-12">
                   <div class="card">
                       <img src="{{ asset('image/report.png') }}" alt="Denim Jeans" style="width:83%">
                       <h1 class="title">Permissions</h1><hr>
                       <p class="explain" style="margin-bottom: 15%; margin-top: 5%">View permissions to post victims story </p>
                       <p><button class="button"><span>View</span></button></p>
                   </div>
               </div>
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
