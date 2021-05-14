<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Travelcenter</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/carousel/">
     <script src="https://kit.fontawesome.com/e51b14eecf.js" crossorigin="anonymous"></script>

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/travelcenter.css">
<link rel="stylesheet" href="style.css">


    
    
    <!-- Custom styles for this template -->
    <link href="css/tomra.css" rel="stylesheet">
  </head>
  <body>
    
   
  

    
<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">Travel center</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">

          <!--<li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          
          
          <li class="nav-item">
            <a class="nav-link" href="login.php">Log in</a>
            </li> -->


            

            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown" >
      <ul class="navbar-nav me-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-search"></i>
            <i class="fas fa-bars"></i>
            
          </a>
         
          
          <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
            <li>
    <div class="input-group mt-2 mx-2">
      <div class="form-outline">
        <input type="search" id="form1" class="form-control-dropdown" placeholder="Search" />
        <label class="form-label" for="form1"></label>
      </div>
    </div>
  </li>
  <li><hr class="dropdown-divider" /></li>

   <?php if (isset($_SESSION['username'])) {
 echo "<li><a class='dropdown-item' href='login.php'>Login or register</a></li>";
   }
else{
echo"<li><a class='dropdown-item' href='logout.php'>Log out</a></li>";
}
    ?>
           
            <li><a class="dropdown-item" href="prices.php">Se our prices</a></li>
            <li><a class="dropdown-item" href="aboutus.php">About us</a></li>
            
            <li><a class="dropdown-item" href="admin.php">admin</a></li>
          </ul>
        </li>
      </ul>
    </div>

        </ul>
       

      </div>
    </div>
   
  </nav>
</header>