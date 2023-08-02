<?php

?>
<html>
    <head>
    <title>
</title>
<link rel="stylesheet" href="global.css"/>
</head>
<meta content ="width=device-width,initial-scale=1" name="viewport"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <body style= "background-color:honeydew;">
        <!-- background="img/bgforcr.jpg" style ="background-repeat:no-repeat;background-size:100% 100%">-->
    <div class="parentcr">
        <div class="deco">
     <form method="post">
         <div class="labelinput1">
         <label class="usernamelabel">Enter your Username
</br>
             <input class ="usernameinput" type="text" placeholder="user123" name="username" min-length=5/></div>
</br>
</br>

<div class="labelinput2">
             <label class="roomlabel">Enter room name
</br>
             <input class ="roominput" type="text" placeholder="room123" name="room" min-length=5>
             </br></div>
<div class="create1">
             <button class="create" name="create" type="submit"> Create</button></div></div>
</form>
</div>
</body>
    </html>
    <?php
    if(isset($_POST['create']))
    {session_start();
        $_SESSION['admin']=1;
        $_SESSION['username']=$_POST['username'];
        $_SESSION['room']=$_POST['room'];
        $conn=new mysqli("localhost","root" ,"","ubid");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
         
          $query="CREATE TABLE ".$_SESSION['room']." ( player_no INTEGER AUTO_INCREMENT,username VARCHAR(100),  amount INTEGER, changed INTEGER, PRIMARY KEY(player_no));";

          $result=mysqli_query($conn,$query);
          $query1="INSERT INTO ".$_SESSION['room']."(username,amount) VALUES('".$_SESSION['username']."',1000); ";
          
          $result1=mysqli_query($conn,$query1);
          $query3="INSERT INTO roomstart VALUES('".$_SESSION['room']."',0);";
          
          $result3=mysqli_query($conn,$query3);
          
          header("location: http://".$_SERVER['HTTP_HOST']."/Ubid/join_room.php");
          // server address/Ubid/join_room.php
          
    }
    ?>
