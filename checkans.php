<?php
session_start();
$conn=new mysqli("localhost","root" ,"","ubid");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    $bool=0;
if($_POST['opt1'])
{$query="SELECT* FROM ".$_SESSION['room']."qn ID=".$_SESSION['qid'].";";
    $result=mysqli_query($conn,$query);
    
while($row=mysqli_fetch_assoc($result))
{if($row['opt1']=$row['ca'])
    $bool=1;
}
}
if($_POST['opt2'])
{$query="SELECT* FROM ".$_SESSION['room']."qn ID=".$_SESSION['qid'].";";
    $result=mysqli_query($conn,$query);
    
while($row=mysqli_fetch_assoc($result))
{if($row['opt2']=$row['ca'])
    $bool=1;
}
}
if($_POST['opt3'])
{$query="SELECT* FROM ".$_SESSION['room']."qn ID=".$_SESSION['qid'].";";
    $result=mysqli_query($conn,$query);
    
while($row=mysqli_fetch_assoc($result))
{if($row['opt3']=$row['ca'])
    $bool=1;
}
}
if($_POST['opt4'])
{$query="SELECT* FROM ".$_SESSION['room']."qn ID=".$_SESSION['qid'].";";
    $result=mysqli_query($conn,$query);
    
while($row=mysqli_fetch_assoc($result))
{if($row['opt4']=$row['ca'])
    $bool=1;
}
}
if(isset($bool) && $bool==0)
{
    $query="UPDATE ".$_SESSION['room']." SET amount=amount-".$_POST['slider']." WHERE ID=".$_SESSION['ID'].";";
    $result=mysqli_query($conn,$query);
    ?>
    Wrong Answer
    <?php
}
if(isset($bool) && $bool==1)
{
    $query="UPDATE ".$_SESSION['room']." SET amount=amount+".$_POST['slider']." WHERE ID=".$_SESSION['ID'].";";
    $result=mysqli_query($conn,$query);
    $id=intval($_SESSION['qid']/$_SESSION['round'])+1;
    $amt=$_POST['slider']/2;
    $query1="UPDATE ".$_SESSION['room']." SET amount=amount+".$amt." WHERE ID=".$id.";";
    $result1=mysqli_query($conn,$query1);
    ?>
    Correct Answer
    <?php
}
}
?>