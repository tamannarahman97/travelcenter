<?php 
include 'header.php';
include 'connection.php';

error_reporting(0);



if (isset($_SESSION['username'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $cpassword = md5($_POST['cpassword']);
  $firstname=($_POST['firstname']);
  $lastname=($_POST['lastname']);
  $tlf=($_POST['tlf']);
  $address=($_POST['address']);
  $postcode=($_POST['postcode']);
  $city=($_POST['city']);

  if ($password == $cpassword) {
    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
      $sql = "INSERT INTO users (username, email, password,firstname,lastname,tlf,address,postcode,city)
          VALUES ('$username', '$email', '$password','firstname','lastname','tlf','address','postcode','city')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        echo "<script>alert('Wow! User Registration Completed.')</script>";
        $username = "";
        $email = "";
        $_POST['password'] = "";
        $_POST['cpassword'] = "";
        $firstname = "";
        $lastname = "";
        $tlf = "";
        $address = "";
        $postcode = "";
        $city = "";
      } else {
        echo "<script>alert('Woops! Something Wrong Went.')</script>";
      }
    } else {
      echo "<script>alert('Woops! Email Already Exists.')</script>";
    }
    
  } else {
    echo "<script>alert('Password Not Matched.')</script>";
  }
  header("Location: login.php");
      die;
}

?>










    
    <!-- Custom styles for this template -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/travelcenter.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="stylelogin.css">
  </head>
  <body>
  
  

  



<main>

<div class="container">
    <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;text-align: center">Register</p>
      <div class="input-group">
        <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
      </div>
      <div class="input-group">
        <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
      </div>
      <div class="input-group">
        <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
        <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
      </div>

<div class="input-group">
        <input type="firstname" placeholder="firstname" name="firstname" value="<?php echo $firstname; ?>" required>
      </div>
<div class="input-group">
        <input type="lastname" placeholder="lastname" name="lastname" value="<?php echo $lastname; ?>" required>
      </div>
      <div class="input-group">
        <input type="tlf" placeholder="tlf" name="tlf" value="<?php echo $tlf; ?>" required>
      </div>
      <div class="input-group">
        <input type="address" placeholder="address" name="address" value="<?php echo $address; ?>" required>
      </div>
      <div class="input-group">
        <input type="postcode" placeholder="postcode" name="postcode" value="<?php echo $postcode; ?>" required>
      </div>
      <div class="input-group">
        <input type="city" placeholder="city" name="city" value="<?php echo $city; ?>" required>
      </div>





      <div class="input-group">
        <button name="submit" class="btn">Register</button>
      </div>
      <p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
    </form>
  </div>


  </main>
   

    <?php
  include 'footer.php';
?>
