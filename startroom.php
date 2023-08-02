<?php
session_start();


$conn=new mysqli("localhost","root" ,"","ubid");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      
    $query1="UPDATE roomstart SET strt=1 WHERE roomname='".$_SESSION['room']."'";
 $result1=mysqli_query($conn,$query1);
  
    ?>