<?php
session_start();

$conn=new mysqli("localhost","root" ,"","ubid");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
$query="SELECT * FROM roomstart WHERE roomname='".$_SESSION['room']."'";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result))
{
    $strt=$row['strt'];
    break;
}

if($strt==0 && isset($_SESSION['admin']) && $_SESSION['admin']==1)
{
    ?>
<button class="btn2">Start Game</button>

<?php
}
else
{

}
?>