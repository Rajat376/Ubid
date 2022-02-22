<?php session_start(); ?>
<?php
 $conn=new mysqli("localhost","root" ,"","ubid");
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
   $query="Select * from ".$_SESSION['room']." ORDER BY amount DESC";
   $result=mysqli_query($conn,$query);
   $i=1;
   while($row=mysqli_fetch_assoc($result))
   {?>
   <div class="userbox <?php if($row['username']==$_SESSION['username'])
                                {echo "me";}?>"><?php echo" #".$i." ".$row['username']."<font color='red'> ".$row['amount']."</font>"; ?></div>
                                </br>

<?php
$i=$i+1;
   }
?>