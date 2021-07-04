<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "direction");
                                  
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$result = $conn->query("SELECT * FROM `tabledirectione` WHERE 1"); 

// Loop
While($row = $result->fetch_assoc()){

                echo "Forward : ".$row['Forward']."<br>";
                echo "Backward : ".$row['Backward']."<br>";
                echo "Right : ".$row['Right']."<br>";
                echo "Lift : ".$row['Lift']."<br>";
                echo "Stop : ".$row['Stop']."<br>";
}

?>