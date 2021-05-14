<<?php 
include 'header.php';
include 'connection.php';


$sql="SELECT * From prices; ";
//$result=mysqli_query($conn,$sql);

if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
    	
        echo "<table>";
            echo "<tr>";
                echo "<th>Country</th>";
                echo "<th>Price</th>";
                
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['country'] . "</td>";
                echo "<td>" . $row['prices'] . "</td>";
                
            echo "</tr>";
        }
        echo "</table>";
        
    }
}


    /*if(mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_array($result)){
            
                echo "Country: " . $row['country'] . "prices: " .$row['prices'] ."<br>";
               
            



}
}

  */


include 'footer.php';
 ?>
