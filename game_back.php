
<?php
session_start();
chance:
if(!isset($_SESSION['no']))
$_SESSION['no']=0;




$conn=new mysqli("localhost","root" ,"","ubid");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
 // echo $_SESSION['room'];
$query="SELECT * FROM roomstart WHERE roomname='".$_SESSION['room']."'";
$result=mysqli_query($conn,$query);

while($row=mysqli_fetch_assoc($result))
{
    $_SESSION['strt']=$row['strt'];
    break;
}

if(isset($_SESSION['strt']) && $_SESSION['strt']==0)
{echo $_SESSION['no'];
   

}
else if(isset($_SESSION['strt']) && $_SESSION['strt']==1)
{  if(!isset($_SESSION['time']))
  $_SESSION['time']=time();
   $time=time()-$_SESSION['time'];
  
 
  if($_SESSION['no']==0 && isset($_SESSION['no']))
  { $query1="SELECT COUNT(player_no) FROM ".$_SESSION['room'];
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
    $_SESSION['totaltime']=$z*30+20*$_SESSION['round']-10;
    
  echo $z;
 
if(isset($_SESSION['admin']) && $_SESSION['admin']==1)
{$query2="CREATE TABLE ".$_SESSION['room']."qn(ID INTEGER AUTO_INCREMENT,
  qn1 VARCHAR(200),qn2 VARCHAR(200),opt1 VARCHAR(100),opt2 VARCHAR(100),opt3 VARCHAR(100),opt4 VARCHAR(100),
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

  }
else if(isset($_SESSION['no']) && $_SESSION['no']>0 && $_SESSION['no']<=$_SESSION['round'])
{
  $id=0;
  $timeqn=20-($time%20);
  $a=$_SESSION['no'] +$_SESSION['round']*($_SESSION['ID']-1);
  $_SESSION['qid']=$a;
  //echo $a;
  //echo $_SESSION['no'];
  //echo $_SESSION['count'];
  //echo $_SESSION['ID'];
  $query1="SELECT * FROM ".$_SESSION['room']."qn WHERE ID =".$a.";";
  $result1=mysqli_query($conn,$query1);
  while($row=mysqli_fetch_assoc($result1))
  {echo $_SESSION['no']."|". $row['qn1']." ".$_SESSION['username']." ".$row['qn2']."|".$row['opt1']."|".$row['opt2']."|".$row['opt3']."|"
    .$row['opt4']."|".$row['ID']."|".$time."|".$_SESSION['round']."|".$timeqn."|".$id."|".$row['ca']."|".$_SESSION['totaltime'];
break;
  }
}
else if($_SESSION['no']<=$_SESSION['total'])
{ 
  $timeqn=(30-($time-$_SESSION['fixtime'])%30);
  $a=intval($_SESSION['no'] - $_SESSION['round']);
  $_SESSION['qid']=$a;
  $id=intval($_SESSION['no']/$_SESSION['round']);
  //echo $a;
  //echo $_SESSION['no'];
  //echo $_SESSION['count'];
  //echo $_SESSION['ID'];
  $query1="SELECT * FROM ".$_SESSION['room']."qn WHERE ID =".$a.";";
  $result1=mysqli_query($conn,$query1);
  while($row=mysqli_fetch_assoc($result1))
  { if($row['ca']=="")
    {$e=$_SESSION['time']-30;
      $_SESSION['time']=$e;
      $time=$time+30;
    }
    echo $_SESSION['no']."|".$row['qn1']." ".$row['person']." ".$row['qn2']."|".$row['opt1']."|".$row['opt2']."|".$row['opt3']."|"
    .$row['opt4']."|".$row['ID']."|".$time."|".$_SESSION['round']."|".$timeqn."|".$id."|".$row['ca'].$_SESSION['totaltime'];
break;


  }

}
else
{
  echo $_SESSION['no'];
}
$_SESSION['fixtime']=$_SESSION['round']*20;
if($_SESSION['no']<=$_SESSION['round'])
$k=intval($time/20) +1;
else
$k=intval(($time-$_SESSION['round']*20)/30) +$_SESSION['round']+1;
$_SESSION['no']=$k;
}

?>