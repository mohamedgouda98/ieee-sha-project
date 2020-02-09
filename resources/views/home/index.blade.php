@extends('layouts.main')

@section('content')

<!-- This Page for youssef -->
<!-- To open this page just write serve link without anything -->
<!-- write your Code Here -->

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
          
<section>
            
        <div class="container">
<!--frist row-->
            <div class="row e">
<!--frist column (logo)-->
                <div class="col-md-3 col-sm-12">logo</div>
<!--end of frist column-->
<!--second column-->
                <div class="col-md-9 col-sm-12">
                <div class="row a"><h3 class="b">General Information About IEEE:</h3> </div>
                <div class="row c">
                    <p>
                    -IEEE, An association dedicated to advancing innovation and 
                    technological excellence for the benefit of humanity, 
                    is the world’s largest technical professional society.
                    It is designed to serve professionals involved in all aspects 
                    of the electrical, electronic, and computing fields and related 
                    areas of science and technology that underlie modern civilization.
                    </p>
                    </div>
                </div>
<!--end of second column-->
            </div>
<!--end of frist row-->
            
<!--second row-->
                <div style="background-color: #f1f5fe" class="row e">
<!--frist column-->
                    <div class="col-md-4 col-sm-12 d"><i style="color: #FEC459" class="fas fa-lightbulb f"></i></div>
<!--end of frist column-->
<!--second column-->
                    <div class="col-md-4 col-sm-12 d"><i style="color: #0170A8" class="fas fa-user-graduate f"></i></div>
<!--end of second column-->
<!--third column-->
                    <div class="col-md-4 col-sm-12 d"><i style="color: #FDC39B" class="fas fa-hands f"></i></div>
<!--end of third column-->
                </div>
<!--end of second row-->
            
<!--third row-->
            <div class="row e">
<!--frist column (logo)-->
                <div class="col-md-3 col-sm-12">logo</div>
<!--end of frist column-->
<!--second column-->
                <div class="col-md-9 col-sm-12">
                <div class="row a"><h3 class="b">About IEEE Egypt Section:</h3> </div>
                <div class="row c">
                    <p>
                    -The IEEE is divided into different categories according to
                    geographical regions, technical aspects, and expertise.
                    Geographically, The IEEE divides the world into 10 regions.
                    IEEE Egypt Section lies in Region 8, which includes Europe sections, Africa,
                    and Middle East Sections.
                    </p>
                    </div>
                </div>
<!--end of second column-->
            </div>
<!--end of third row-->
            
<!--fourth row-->
            <div style="background-color: #f1f5fe" class="row e">
<!--frist column (logo)-->
                <div class="col-md-3 col-sm-12">logo</div>
<!--end of frist column-->
<!--second column-->
                <div class="col-md-9 col-sm-12">
                    
                    <div class="row c">
                    <p>
                   -To lead in getting the electrical power and energy engineering
                    students ready to work professionally in the industry..  
                    </p>
                    </div>
                    
                <div class="row c">
                    <p>
                   -To keep adding value and providing students
                    with the technicalities and scientific information
                    needed to get into the electrical power and energy industry ready.  
                    </p>
                    </div>
                    
                </div>
<!--end of second column-->
            </div>
<!--end of fourth row-->
            </div>
        </section>

index page

@endsection

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