Results for This round
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
     echo " #".$i." ".$row['username']." ".$row['amount']." ";
     if($row['changed']==0)
     {
        echo $row['changed'];
     }
     else if($row['changed']>0)
     {
        echo $row['changed'];
     }
     else if($row['changed']<0)
     {
        echo $row['changed'];
     }
     $i++;
 }
 ?>