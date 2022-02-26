
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
     echo "<div class='containerresult'><div class='hashrank'> #".$i."</div><div class='resultuser'>".$row['username']."</div><div class='resultamount'> ".$row['amount']."</div>";
     if($row['changed']==0)
     {
        echo"<div class='score'>" .$row['changed']."</div>";
     }
     else if($row['changed']>0)
     {
        echo "<div class='score'>".$row['changed']."</div>";
     }
     else if($row['changed']<0)
     {
        echo"<div class='score'>" .$row['changed']."</div>";
     }
     echo"</div></br><br></br><br>";
     $i++;
 }
 ?>