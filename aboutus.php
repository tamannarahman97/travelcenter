<?php 
include 'header.php';
include 'connection.php';

$sql="SELECT * From about_us; ";
$result=mysqli_query($conn,$sql);


    if(mysqli_num_rows($result) > 0){
                echo "<div class= container>";
                while($row = mysqli_fetch_array($result)){
            
                echo "<p> About us: " . $row['information'] . "</p><br>";

/*while($row = mysqli_fetch_array($result)){
            
                echo . "About us: " . $row['information'] . "<br>";*/
               
            
    




}
echo "</div>";
}




include 'footer.php';
 ?>



