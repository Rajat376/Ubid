<html>
    <head>
    <title>
</title>
<link rel="stylesheet" href="global.css">
</head>
    <body>
    <div class="parent">
     <form method="post">
         <label>Enter your Username
             <input type="text" placeholder="user123" name="username" min-length=5>
</br>
             <label>Enter room name

             <input type="text" placeholder="room123" name="room" min-length=5>
             </br>

             <button class="create" name="create" type="submit"> Create</button>
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
         
          $query="CREATE TABLE ".$_SESSION['room']." ( player_no INTEGER AUTO_INCREMENT,username VARCHAR(100),  amount INTEGER, PRIMARY KEY(player_no));";

          $result=mysqli_query($conn,$query);
          $query1="INSERT INTO ".$_SESSION['room']."(username,amount) VALUES('".$_SESSION['username']."',1000); ";
          
          $result1=mysqli_query($conn,$query1);
          $query3="INSERT INTO roomstart VALUES('".$_SESSION['room']."',0);";

          $result3=mysqli_query($conn,$query3);
          header("location: http://192.168.1.42/Ubid/join_room.php");
          // server address/Ubid/join_room.php
          
    }
    ?>