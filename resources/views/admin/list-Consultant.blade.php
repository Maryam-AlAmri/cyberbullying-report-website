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
                <link rel="stylesheet" href="{{ asset('CSS/admin-list.css') }}">
                <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

                <title>SCP</title>
            </head>
            <body>
              {{-- Divs  --}}
             
              <table>
                <tr>
                  <th>id</th>
                  <th>Clinic Name</th>
                  <th>Doctor Name</th>
                  <th class="action">Action</th>
                  <th>Status</th>
                </tr>
                @foreach ($Consultants as $Consultant)
                <tr>
                  <td>{{$Consultant->id}}</td>
                  <td>{{$Consultant->clinic_name}}</td>
                  <td>{{$Consultant->drName}}</td>
                  <td>
                    <form action="/consultants/register/approved" method="POST">
                        @csrf
                        <input type="hidden" value="{{$Consultant->id}}" name="id"/>
                        <br>
                        <input type="radio" id="Accept" name="status" value="Accept"/>
                        <label for="Accept">Accept</label>

                        <input type="radio" id="Reject" name="status" value="Reject"/>
                        <label for="Reject">Reject</label>

                        <button class="button" type="submit">Submit</button>
                    </form>
                  </td>
                  <td>{{$Consultant->status}}ed</td>
                </tr>
                @endforeach
              </table>
              
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
