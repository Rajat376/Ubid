<html>
    <head>
    <link rel="stylesheet" href="global.css"/>
</head>
<body style="background-color:rgb(48,25,52)">
    
    <div class='resulttitle'>
RESULT</div> 
<?php 
session_start();
$conn=new mysqli("localhost","root" ,"","ubid");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  $query="SELECT * FROM ".$_SESSION['room']." ORDER BY amount DESC;";
 $result=mysqli_query($conn,$query);
 $i=1;
 echo'<div class="resultbg">';
 while($row=mysqli_fetch_assoc($result))
 {
     if($i==1){
        echo "<div class='finalresults1'><font color=''> #".$i."</font><font color=''> ".$row['username']."</font><font color=''> ".$row['amount']."</font></div>";
     }
     else if($i==2){
        echo "<div class='finalresults2'><font color=''> #".$i."</font><font color=''> ".$row['username']."</font><font color=''> ".$row['amount']."</font></div>";
     }
    else if($i==3){
        echo "<div class='finalresults3'><font color=''> #".$i."</font><font color='black'> ".$row['username']."</font><font color=''> ".$row['amount']."</font></div>";
     }
     else{
     echo "<div class='finalresults'><font color=''> #".$i."</font><font color=''> ".$row['username']."</font><font color=''> ".$row['amount']."</font></div>";
     }
     
     
     $i++;
 }
 echo "</div>";
 ?>
 </body>
 </html>