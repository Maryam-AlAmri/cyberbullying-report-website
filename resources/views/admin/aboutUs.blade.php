<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SCP</title>
    <link rel="stylesheet" href="{{ asset('CSS/AboutUs.css') }}">
</head>
<body>
<!-- Header Code Start here -->
<div class="header">
  <ul>
    <li><a class="active" href="index.html">Home</a></li>
    <li><a href="#contact">Services</a></li>
    <li><a href="ContactUs.html">Contact us</a></li>
    <li><a href="{{ ('/aboutUs') }}">About us</a></li>
  </ul>
</div>
<!-- Header Code End here -->
<!-- Body Code Start Here -->

<div class="row">
    <div class="column">
        <!-- First  -->
        <div class="card">
            <img src="{{ asset('image/woman.png') }}" alt="John" style="width:50%">
            <h1 class="name">Maryam AlAmri</h1>
            <p class="title">Developer</p>
            <p>UTAS - Shinas</p>
            <div style="margin: 24px 0;">
               <a href="#"><i class="fa fa-instagram"></i></a>
               <a href="#"><i class="fa fa-twitter"></i></a>  
               <a href="#"><i class="fa fa-linkedin"></i></a>
            </div>
         
          </div>
    </div>
    <div class="column">
        <!-- Second -->
        <div class="card">
            <img src="{{ asset('image/woman1.png') }}" alt="John" style="width:50%">
            <h1 class="name">Aamal AlSaidi</h1>
            <p class="title">Developer</p>
            <p>UTAS - Shinas</p>
            <div style="margin: 24px 1px;">
              <a href="#"><i class="fa fa-instagram"></i></a>
              <a href="#"><i class="fa fa-twitter"></i></a>  
              <a href="#"><i class="fa fa-linkedin"></i></a>  
               
            </div>
            
          </div>
    </div>
  </div>


<!-- Body Code End Here -->
<!-- Footer Start Here  -->
<div>
  <footer>
    <p> &#64; Cyberbullying 2022</p>
  </footer>
</div>
    
</body>
</html>