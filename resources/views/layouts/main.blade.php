<!--

        This Page For mostafa samy
        Write Your Code Here

-->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=s1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <title>IEEE-SHA</title>
        
       
    </head>
    <body>





     
<section class="home">
        <nav class=" navbar py-4 navbar navbar-expand-lg navbar-light ">
            <div class="container">
  <a class="navbar-brand" href="#"><img id="photo" src="logo.png"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    Menu <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto text-uppercase">
      
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
          <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
          <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
          <li class="nav-item">
        <a class="nav-link" href="#">Our Workshop</a>
      </li>
      
    </ul>
   
  </div>
                </div>
</nav>
          
     


<!-- fotter -->
 <div class="container">


  <div class="row">

    <div class="col-md-6">


    <div class="leftFotter pl-3">

    <h1> <span class="verLine"></span> About</h1>
    <p>ontainers provide a means to center and horizontally pad your site’s contents. Use .container for a responsive pixel width or .container-fluid for width: 100% across all viewport and device sizes.
    Rows are wrappers for columns. Each column has horizontal padding (called a gutter) for controlling the space between them. This padding is then counteracted on the rows with negative margins. This way, all the content in your columns is visually aligned down the left side.
    In a grid layout, content must be placed within columns and only columns may be immediate children of rows.
    Thanks to flexbox, grid columns without a specified width will automatically layout as equal width columns. For example, four instances of .col-sm will each automatically be 25% wide from the small breakpoint and up. See the auto-layout columns section for more examples.
    Column classes indicate the num</p>

    <h1> <span class="verLine"></span>  Follow Us</h1>

    <div class="icons">
       <img class="Smedia" src="instagram.png">
       <img class="Smedia" src="facebook.png">
       <img class="Smedia" src="twitter.png">
       <img class="Smedia" src="linkedin.png">
       <img class="Smedia" src="youtube.png">
       <img class="Smedia" src="google-plus.png"> 

    </div>
    </div>
    </div>
    <div class="col-md-6">
    <div class="rightFotter pl-3">

      <h1> <span class="verLine"></span> Contact</h1>
                 <div class="row test"><i class="far fa-user-circle icon"></i><input type="text" id="ip2" placeholder="First Name"/></div> 
                 <div class="row test"><i class="fas fa-at icon"></i><input type="text" id="ip2" placeholder="E-mail"/></div> 
                 <div class="row test"><i class="far fa-comment-dots icon "></i><textarea  class="vip" id="ip2" cols="30" rows="10" placeholder="Write Your Message"></textarea>

            
    </div>
    <div class="row"><button type="button" id="ip1" class="btn btn-primary">Send</button></div>





    </div>
  </div>

</div>
</div>
<footer class="lastPart">
    <div class="col-md-12 text-center zatona">
      <p class="text-white">All Copyight Reserved To IEEE El Shrouk Academy SB@</p>
    </div>
  
</footer>
        @include('layouts.msg')

        @yield('content')

        <script src="{{asset('js/app.js')}}"></script>

    </body>
</html>
