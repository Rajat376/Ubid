<html>
    <head>
</head>
<body>
result
<?php 
session_start();
$conn=new mysqli("localhost","root" ,"","ubid");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $query="SELECT * FROM ".$_SESSION['room']." ORDER BY amount DESC;";
 $result=mysqli_query($conn,$query);
 $i=1;
 echo'<div style="background-color:black">';
 while($row=mysqli_fetch_assoc($result))
 {
     echo "<div class='containerresult'><font color='white'> #".$i."</font><font color='white'> ".$row['username']."</font><font color='white'> ".$row['amount']."</font></div>";
 
     
     
     $i++;
 }
 echo "</div>";
 ?>
 </body>
 </html>