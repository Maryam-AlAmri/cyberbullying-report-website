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
                            <h1 class="title">Institution List</h1><hr>
                            <p class="explain" style="margin-bottom: 15%; margin-top: 5%">Check the new Institution</p>
                            <a  href="{{ ('/admin/Institution-list') }}" ><p><button class="button"><span>View</span></button></p></a>
                        </div>
                    </div>
                </div>

                {{-- 2th div --}}
                <div class="col-lg-3">
                    <div class="col-lg-12">
                        <div class="card">
                            <img src="{{ asset('image/victims-list.png') }}" alt="Denim Jeans" style="width:100%;">
                            <h1 class="title">Victims List</h1><hr>
                            <p class="explain" style="margin-bottom: 15%; margin-top: 5%">Check the new Victims</p>
                            <p><button class="button"><span>View</span></button></p>
                        </div>
                    </div>
                </div>

                {{-- 3th div --}}
                <div class="col-lg-3">
                    <div class="col-lg-12">
                       <div class="card">
                           <img src="{{ asset('image/Consultant-list.png') }}" alt="Denim Jeans" style="width:100%; padding-bottom: 15%;">
                           <h1 class="title">Consultant List</h1><hr>
                           <p class="explain" style="margin-bottom: 15%; margin-top: 5%">Check the new Consultant</p>
                           <a  href="{{ ('/admin/Consultant-list') }}"><p><button class="button"><span>View</span></button></p></a>
                       </div>
                   </div>
               </div>

               {{-- 4th div --}}
               <div class="col-lg-3">
                <div class="col-lg-12">
                   <div class="card">
                       <img src="{{ asset('image/report.png') }}" alt="Denim Jeans" style="width:83%">
                       <h1 class="title">Stories</h1><hr>
                       <p class="explain" style="margin-bottom: 15%; margin-top: 5%">Add the new Check the new </p>
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




        
           {{-- My code end here  --}}
    </div>
</div>
@endsection
