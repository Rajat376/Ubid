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

             <button class="create" name="join" type="submit"> Join</button>
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

        // Check connection
        

    }
    ?>