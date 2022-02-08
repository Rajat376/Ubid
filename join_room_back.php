<?php session_start(); ?>
<?php
 $conn=new mysqli("localhost","root" ,"","ubid");
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
   $query="Select * from ".$_SESSION['room']."";
   $result=mysqli_query($conn,$query);
   while($row=mysqli_fetch_assoc($result))
   {?>
   <div class="userbox <?php if($row['username']==$_SESSION['username'])
                                {echo "me";}?>"><?php echo" ".$row['username']." ".$row['amount']; ?></div>
                                </br>

<?php
   }
?>