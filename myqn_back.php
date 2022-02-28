
<div class="resultforthisround">Results for This round</div></br></br>
<?php 
session_start();
$conn=new mysqli("localhost","root" ,"","ubid");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $query="SELECT * FROM ".$_SESSION['room']." ORDER BY amount DESC;";
 $result=mysqli_query($conn,$query);
 $i=1;
 while($row=mysqli_fetch_assoc($result))
 {
     echo "<div class='containerresult'><font color='white'> #".$i."</font><font color='white'> ".$row['username']."</font><font color='white'> ".$row['amount']."</font>";
     if($row['changed']==0)
     {
        echo"<div class='score'><font color='aqua'> " .$row['changed']."</font>";
     }
     else if($row['changed']>0)
     {
        echo "<font color='aqua'> ".$row['changed']."</font>";
     }
     else if($row['changed']<0)
     {
        echo"<font color='aqua'> " .$row['changed']."</font>";
     }
     echo"</div></br></div>";
     $i++;
 }
 ?>