<?php session_start(); ?>
<?php
 $conn=new mysqli("localhost","root" ,"","ubid");
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
   $query="Select * from ".$_SESSION['room']." ORDER BY amount DESC";
   $result=mysqli_query($conn,$query);
   $k=0;
   $i=1;
   while($row=mysqli_fetch_assoc($result))
   {?>
   <div class="<?php if($row['username']==$_SESSION['username'])
                                {echo "me";
                                $k=$row['amount'];}?> userbox"><?php echo"<font color='red'> #".$i." </font>".$row['username']."<font color='cadetblue'> ".$row['amount']."</font>"; ?></div>
                                </br>

<?php
$i=$i+1;
   }
   echo "|".$k;
?>