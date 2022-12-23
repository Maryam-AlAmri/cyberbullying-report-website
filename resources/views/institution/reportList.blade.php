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
                  <th>Victims</th>
                  <th>Overall</th>
                  <th>Create at</th>
                  <th>Update at</th>
                  <th>Take Decision </th>
                </tr>
                @foreach ($reports as $report)
                <tr>
                  <td>{{$report->id}}</td>
                  <td>{{$report->name}}</td>
                  <td>{{$report->Overall}}</td>
                  <td>{{$report->created_at}}</td>
                  <td>{{$report->updated_at}}</td>
                  <td>
                    <a href={{"selectReport/".$report->id}}>Select</a>
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
