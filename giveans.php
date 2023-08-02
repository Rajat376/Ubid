<?php
session_start();
$conn=new mysqli("localhost","root" ,"","ubid");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
if(isset($_POST['opt1']))
{$query="UPDATE ".$_SESSION['room']."qn SET ca=opt1 WHERE ID=".$_SESSION['qid'].";";
    $result=mysqli_query($conn,$query);
    $query1="UPDATE ".$_SESSION['room']."qn SET person='".$_SESSION['username']."' WHERE ID=".$_SESSION['qid'].";";
    $result1=mysqli_query($conn,$query1);
echo "1";
}
if(isset($_POST['opt2']))
{$query="UPDATE ".$_SESSION['room']."qn SET ca=opt2 WHERE ID=".$_SESSION['qid'].";";
    $result=mysqli_query($conn,$query);
    $query1="UPDATE ".$_SESSION['room']."qn SET person='".$_SESSION['username']."' WHERE ID=".$_SESSION['qid'].";";
    $result1=mysqli_query($conn,$query1);

}
if(isset($_POST['opt3']))
{$query="UPDATE ".$_SESSION['room']."qn SET ca=opt3 WHERE ID=".$_SESSION['qid'].";";
    $result=mysqli_query($conn,$query);
    $query1="UPDATE ".$_SESSION['room']."qn SET person='".$_SESSION['username']."' WHERE ID=".$_SESSION['qid'].";";
    $result1=mysqli_query($conn,$query1);

}
if(isset($_POST['opt4']))
{$query="UPDATE ".$_SESSION['room']."qn SET ca=opt4 WHERE ID=".$_SESSION['qid'].";";
    $result=mysqli_query($conn,$query);
    $query1="UPDATE ".$_SESSION['room']."qn SET person='".$_SESSION['username']."' WHERE ID=".$_SESSION['qid'].";";
    $result1=mysqli_query($conn,$query1);

}
header("location: http://".$_SERVER['HTTP_HOST']."/Ubid/join_room.php");
?>