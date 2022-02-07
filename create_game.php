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
         
          $query="CREATE TABLE ".$_SESSION['room']." ();";

    }
    ?>