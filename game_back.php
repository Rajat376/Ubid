<?php
session_start();
if(!isset($_SESSION['no']))
$_SESSION['no']=0;

echo $_SESSION['no']."|";
$_SESSION['var']="xy4";
echo $_SESSION['var'];
$conn=new mysqli("localhost","root" ,"","ubid");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  echo $_SESSION['room'];
$query="SELECT * FROM roomstart WHERE roomname='".$_SESSION['room']."'";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result))
{
    $strt=$row['strt'];
    break;
}

if($strt==0)
{echo "nothing";
   

}
else if($strt==1)
{
  if($_SESSION['no']==0 && isset($_SESSION['no']))
  { 
  echo "game started";
  $query1="SELECT COUNT(player_no) FROM ".$_SESSION['room'];
  $result1=mysqli_query($conn,$query1);
  while($row=mysqli_fetch_assoc($result1))
  {$_SESSION['count']=$row['COUNT(player_no)'];}
  echo $_SESSION['count'];
  $y=25/$_SESSION['count'];
  $y=intval($y);
  $_SESSION['round']=$y;
  echo $y;
  echo $_SESSION['round'];
  $z=$_SESSION['count']*$_SESSION['round'];
  $_SESSION['total']=$z+$_SESSION['count'];
  echo $_SESSION['total'];
echo $z;
if(isset($_SESSION['admin']) && $_SESSION['admin']==1)
{$query2="CREATE TABLE ".$_SESSION['room']."qn(ID INTEGER AUTO_INCREMENT,
  qn1 VARCHAR(100),qn2 VARCHAR(100),opt1 VARCHAR(50),opt2 VARCHAR(50),opt3 VARCHAR(50),opt4 VARCHAR(50),
  ca VARCHAR(50),person VARCHAR(50),
  PRIMARY KEY(ID)
);";

  $result2=mysqli_query($conn,$query2);
  $query3="SELECT * FROM qnbank ORDER BY RAND() LIMIT ".$z.";";
  $result3=mysqli_query($conn,$query3);
  while($row=mysqli_fetch_assoc($result3))
  {$query4="INSERT INTO ".$_SESSION['room']."qn(qn1,qn2,opt1,opt2,opt3,opt4) VALUES('".$row['qn1']."','".$row['qn2']."','".$row['opt1']."','".$row['opt2']."','".$row['opt3']."','".$row['opt4']."');";
    $result4=mysqli_query($conn,$query4);

  }
  
}
$x=$_SESSION['no']+1;
$_SESSION['no']=$x;
  }
else if(isset($_SESSION['no']) && $_SESSION['no']>0 && $_SESSION['no']<=$_SESSION['round'])
{$a=$_SESSION['no'] +$_SESSION['count']*($_SESSION['ID']-1);
  echo $a;
  echo $_SESSION['no'];
  echo $_SESSION['count'];
  echo $_SESSION['ID'];
  $query1="SELECT * FROM ".$_SESSION['room']."qn WHERE ID =".$a.";";
  $result1=mysqli_query($conn,$query1);
  while($row=mysqli_fetch_assoc($result1))
  {echo $row['qn1'].$_SESSION['username'].$row['qn2']."|".$row['opt1']."|".$row['opt2']."|".$row['opt3']."|".$row['opt4']."|".$row['ID'];
break;
  }
}
}

?>