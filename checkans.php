<html>
    <head>
    <link rel="stylesheet" href="global.css">
<script>
    function getData1() {
  
  var xhr=new XMLHttpRequest();
  xhr.open("POST","game_back.php",true);
  xhr.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      parts=this.responseText.split('|');
      
    }//document.write(parts[0]);
   
    if(parseInt(parts[0])!=0)
    {<?php if(isset($_SESSION['total']) && isset($_SESSION['no']) && $_SESSION['no']>$_SESSION['total'])
      {
        header("location: http://".$_SERVER['HTTP_HOST']."/Ubid/results.php");
      }
      ?>
      if(parseInt(parts[7])>=parseInt(parts[12]))
      {
        window.location.href='/Ubid/results.php';

      }
      if(parseInt(parts[9])<2 || parseInt(parts[9])==30)
      {
        window.location.href='/Ubid/join_room.php';
      }
    
    }
    else
    {
    }

  }
 
  xhr.send();
}
setInterval(getData1, 1000);

function getData3() {
  
  var xm=new XMLHttpRequest();
  xm.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("result").innerHTML=this.responseText;
    }
  }
  xm.open("POST","myqn_back.php",true);
  xm.send();
}
setInterval(getData3,1000);
    </script>
    </head>
    <body>
<?php
session_start();
$conn=new mysqli("localhost","root" ,"","ubid");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
    $bool=0;
if(isset($_POST['opt1']))
{$query="SELECT* FROM ".$_SESSION['room']."qn WHERE ID=".$_SESSION['qid'].";";
    $result=mysqli_query($conn,$query);
    
while($row=mysqli_fetch_assoc($result))
{$ans= $row['ca'];
    if($row['opt1']==$row['ca'])
    $bool=1;
}
}
if(isset($_POST['opt2']))
{$query="SELECT* FROM ".$_SESSION['room']."qn WHERE ID=".$_SESSION['qid'].";";
    $result=mysqli_query($conn,$query);
    
while($row=mysqli_fetch_assoc($result))
{$ans= $row['ca'];
    if($row['opt2']==$row['ca'])
    $bool=1;
}
}
if(isset($_POST['opt3']))
{$query="SELECT* FROM ".$_SESSION['room']."qn WHERE ID=".$_SESSION['qid'].";";
    $result=mysqli_query($conn,$query);
    
while($row=mysqli_fetch_assoc($result))
{$ans= $row['ca'];
    if($row['opt3']==$row['ca'])
    $bool=1;
}
}
if(isset($_POST['opt4']))
{$query="SELECT* FROM ".$_SESSION['room']."qn WHERE ID=".$_SESSION['qid'].";";
    $result=mysqli_query($conn,$query);
    
while($row=mysqli_fetch_assoc($result))
{$ans= $row['ca'];
    if($row['opt4']==$row['ca'])
    $bool=1;
}
}

 echo "<div class='container0'>";
echo"<div class='ansdisplay'>";

if(isset($bool) && $bool==0)
{
    $query1="UPDATE ".$_SESSION['room']." SET amount=amount-".$_POST['slider']." WHERE player_no=".$_SESSION['ID'].";";
    $result1=mysqli_query($conn,$query1);
    $query="UPDATE ".$_SESSION['room']." SET changed=-".$_POST['slider']." WHERE player_no=".$_SESSION['ID'].";";
    $result=mysqli_query($conn,$query);
    echo"<div class='wrongans'>";
    ?>
   Oops! Wrong Answer
    <?php echo "</div></br>"; ?>
    <?php echo "<div class='wrongcorrect'>";
    ?>
    Correct answer: <?php echo $ans; 
    echo"</div>";
}
if(isset($bool) && $bool==1)
{
    $query="UPDATE ".$_SESSION['room']." SET amount=amount+".$_POST['slider']." WHERE player_no=".$_SESSION['ID'].";";
    $result=mysqli_query($conn,$query);
    $id=intval($_SESSION['qid']/$_SESSION['round'])+1;
    $amt=$_POST['slider']/2;
    $query1="UPDATE ".$_SESSION['room']." SET amount=amount+".$amt." WHERE player_no=".$id.";";
    $result1=mysqli_query($conn,$query1);
    $query2="UPDATE ".$_SESSION['room']." SET changed=".$_POST['slider']." WHERE player_no=".$_SESSION['ID'].";";
    $result2=mysqli_query($conn,$query2);
    ?>
   <?php echo "<div class='correctans'>";?>
   Hurrah! Correct Answer 
<?php echo "</div>"; ?>
    <?php
}
echo"</div>";

?>
<div class="resultf" id="result"></div></div>
</body>
    </html>