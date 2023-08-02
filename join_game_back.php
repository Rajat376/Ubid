<?php
    session_start();
        $_SESSION['username']=$_POST['username'];
        $_SESSION['room']=$_POST['room'];
        $conn=new mysqli("localhost","root" ,"","ubid");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $query1="INSERT INTO ".$_SESSION['room']."(username,amount) VALUES('".$_SESSION['username']."',1000); ";
          
          $result1=mysqli_query($conn,$query1);
          if(!$result1)
          echo "No such room";
          $query2="SELECT * FROM ".$_SESSION['room']." WHERE username='".$_SESSION['username']."';";
          
          $result2=mysqli_query($conn,$query2);
          while($row=mysqli_fetch_assoc($result2))
          {echo "abc";
              $_SESSION['ID']=$row['ID'];
              break;
          }
            include "join_room.php";
// address of serverr/Ubid/join_room/php
        // Check connection
        

    
    ?>
