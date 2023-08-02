<?php
if(isset($_SESSION['room']))
session_destroy();
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
    <div class="parentcr">
     <form method="post">
</br><div class="labelinput1">
         <label class="usernamelabel">Enter your Username
</br>
             <input class="usernameinput" type="text" placeholder="user123" name="username" min-length=5></div>
</br></br>
<div class="labelinput2">

             <label class="roomlabel">Enter room name
</br>
             <input  class ="roominput" type="text" placeholder="room123" name="room" min-length=5>
             </br></div>
            
<div class="create1">
             <button class="create" name="join" type="submit"> Join</button></div></div>
</form>
</div>
</body>
    </html>
    <?php
    if(isset($_POST['join']))
    {session_start();
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
          
          header("location: http://".$_SERVER['HTTP_HOST']."/Ubid/join_room.php");
// address of serverr/Ubid/join_room/php
        // Check connection
        

    }
    ?>
