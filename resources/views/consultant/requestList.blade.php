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
                  <th>Victims Name</th>
                  <th>Take Decision</th>
                </tr>
                @foreach ($reports as $report)
                <tr>
                  <td>{{$report->name}}</td>
                  <td>
                    <a href={{"selectRequest/".$report->id}}>Select</a>
                </td>
                
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
