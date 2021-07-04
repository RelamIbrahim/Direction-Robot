<?php

//set connection variables 
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_db = 'direction';

//connection  
$connection = mysqli_connect($db_host, $db_user, $db_password, $db_db );

//check connection 
if(mysqli_connect_errno()):
  printf("Connect failed:", mysqli_connect_errno());
endif;



if(isset($_POST['Forward'])){

    $my_query = "select * from tabledirectione WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO tabledirectione (Forward) VALUES ('Forward')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['Backward'])){

    $my_query = "select * from tabledirectione WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO tabledirectione (Backward) VALUES ('Backward')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['Right'])){

    $my_query = "select * from tabledirectione WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO tabledirectione (Right) VALUES ('Right')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['Lift	'])){

    $my_query = "select * from tabledirectione WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO tabledirectione (Lift) VALUES ('Lift')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}else if(isset($_POST['Stop'])){

    $my_query = "select * from tabledirectione WHERE 1 ";
    $result = mysqli_query($connection, $my_query);

    $my_query = "INSERT INTO tabledirectione (Stop) VALUES ('Stop')";
    $result = mysqli_query($connection, $my_query);
    if($result)
    {
        echo "Item successfuly Added!";
    }
    else{
        echo "ERROR: Unable to past <br>";
    }


}





?>