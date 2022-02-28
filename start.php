<?php
session_start();
    
     
     $conn=new mysqli("localhost","root" ,"","ubid");
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
         
       }
       
     $query="UPDATE roomstart SET strt=1 WHERE roomname='".$_SESSION['room']."';";
     $result=mysqli_query($conn,$query);
     
     header("location: http://192.168.1.47/Ubid/join_room.php");
    
    
      


      
    ?>