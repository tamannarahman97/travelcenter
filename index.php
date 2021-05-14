<?php 

include 'header.php';
?>


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .carousel-item{
        background-size: cover;
        background-repeat: no-repeat;

        

      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/tomra.css" rel="stylesheet">
  </head>
  <body>
    
   
  

    


<main>

  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" style="background-image: url(bilder/plane.jpg)";>
        

        <div class="container">
          <div class="carousel-caption text-start ">
            <h1>Travel now</h1>
            <p>With our customer made package deals</p> 
                 <!--     <p><a class="btn btn-lg btn-primary" href="register.php">Register NOW!</a></p>-->
          </div>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url(bilder/pic1.jpg)";>
       

        <div class="container">
          <div class="carousel-caption">
            <h1>Why choose Travel center?</h1>
            <p>Cheapest prices in the marked .</p>
            <p><a class="btn btn-lg btn-primary" href="prices.php">See the prices</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" style="background-image: url(bilder/pic2.jpg)";>
       

        <div class="container">
          <div class="carousel-caption text-end">
            <h1>Register now!</h1>
            <p> and get 10% offer on your first booking.</p>
            <p><a class="btn btn-lg btn-primary" href="register.php">Register</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<?php

echo $_SESSION['username'];



 ?>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4" >
        <img src="bilder/pic2" width="140" height="140"class="rounded-circle">


        <h2>TOP 1</h2>
        <p>Bora Bora is on our top destination list.</p>
        <!--<p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>-->
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
         <img src="bilder/pic3" width="140" height="140"class="rounded-circle">
        

        <h2>TOP 2</h2>
        <p>Check out maldives.</p>
        <!--<p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>-->
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
         <img src="bilder/pic6" width="140" height="140"class="rounded-circle">
       

        <h2>TOP 3</h2>
        <p>Get connected with the nature.</p>
       <!-- <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>-->
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Where to start? <!--<span class="text-muted">See our tips for first time travellers.</span>--></h2>
        <p class="lead">See our tips for first time travellers.</p>
      </div>
      <div class="col-md-5">
       <img src="bilder/travelmap.jpg" width="500" height="500">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Explore now.<!-- <span class="text-muted">See for yourself.</span>--></h2>
        <p class="lead">What are you waiting for? take your family and friends with you.</p>
      </div>
      <div class="col-md-5 order-md-1">
        <img src="bilder/pic1.jpg" width="500" height="500">

      </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading">Still confused? <!--<span class="text-muted">Checkmate.</span>--></h2>
        <p class="lead">Contact us now!</p>
      </div>
      <div class="col-md-5">
      <img src="bilder/confused.jpg" width="500" height="500">

      </div>
    </div>


<?php
  include 'footer.php';
?>