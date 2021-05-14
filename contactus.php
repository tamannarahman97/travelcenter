<?php 
include 'header.php';
include 'connection.php';

 
 

  
 /* $Email = $_POST['email'];
  $Name =$_POST['name'];
  $Phone =$_POST['contact'];
  $comments =$_POST['text']; */

 if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $name = $_POST['name'];
  $phone=$_POST['contact'];
  $comments=$_POST['text'];
  
  if ($result) {
        echo "thank you";
        $email = "";
        $name = "";
        $phone= "";
        $comments = "";

   if ($password == $cpassword) {
    $sql = "SELECT * FROM contact_us WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    if (!$result->num_rows > 0) {
      $sql = "INSERT INTO users (username, name,phone,comments)
          VALUES ('$email','$name','$phone','$comments')";
      
        
        


  //query to insert the variable data into the database
/*$sql="INSERT INTO contact_us (name, email, phone, comments) VALUES ('".$Name."','".$Email."', '".$Phone."', '".$comments."')";

  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else {
   echo "Thank you! We will get in touch with you soon";
}*/


?>


<html>

<link rel="stylesheet" href="style.css" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="css/contactstyle.css">

<body>
<h2>Contact Us</h2>
  
  <form class="form" action="contactform.php" method="POST">
    
    <p class="username">
      <input type="text" name="name" id="name" placeholder="Enter your name" >
      <label for="name">Name</label>
    </p>
    
    <p class="useremail">
      <input type="text" name="email" id="email" placeholder="mail@example.com" >
      <label for="email">Email</label>
    </p>
    
    <p class="usercontact">
      <input type="text" name="contact" id="contact" placeholder="contact no." >
      <label for="contact">Phone number</label>
    </p>    
  
    <p class="usertext">
      <textarea name="text" placeholder="Write something to us" ></textarea>
                        <label for="text">Comments</label>
    </p>
    
    <p class="usersubmit">
      <input type="submit" name="submit" value="Send" >
    </p>
  </form>
</body>



</html>
<?php
include 'footer.php';
?>
