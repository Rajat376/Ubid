<?php session_start();
$ans ="";
$conn=new mysqli("localhost","root" ,"","ubid");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
 
$query2="SELECT * FROM ".$_SESSION['room']." WHERE username='".$_SESSION['username']."';";
          
$result2=mysqli_query($conn,$query2);
while($row=mysqli_fetch_assoc($result2))
{
    $_SESSION['ID']=$row['player_no'];
    
    break;
}
$query3="UPDATE ".$_SESSION['room']." SET changed=NULL;";
$result3=mysqli_query($conn,$query3);
 ?>
<html>
    <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="global.css">
    <title>
</title>
<script type="text/javascript">
  document.addEventListener('DOMContentLoaded',()=>{document.getElementById('btn');

btn.click()=true;})
document.addEventListener('mousemove',()=>{document.getElementById('btn');
  
btn.click()=true;})
document.addEventListener('mouseenter',()=>{document.getElementById('btn');
  
btn.click()=true;})
document.addEventListener('mouseover',()=>{document.getElementById('btn');
  
btn.click()=true;})
document.addEventListener('DOMContentLoaded',()=>{document.getElementById('btn1');
  
btn1.click()=true;})
document.addEventListener('mousemove',()=>{document.getElementById('btn1');
  
btn1.click()=true;})
document.addEventListener('mouseenter',()=>{document.getElementById('btn1');
  
btn1.click()=true;})
document.addEventListener('mouseover',()=>{document.getElementById('btn1');
  
btn1.click()=true;})



function getData() {
  
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("users").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("POST","join_room_back.php",true);
  xmlhttp.send();
}
var parts;
function getData1() {
  
  var xhr=new XMLHttpRequest();
  
  xhr.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      parts=this.responseText.split('|');
      
    }//document.write(parts[0]);
    
    if(parseInt(parts[0])==0)
    {document.getElementById("game").style.display='none';
  
    }
    else
    {document.getElementById("game").style.display='block';
      document.getElementById("qn").innerHTML=parts[1];
      document.getElementById("opt1").innerHTML=parts[2];
      document.getElementById("opt2").innerHTML=parts[3];
      document.getElementById("opt3").innerHTML=parts[4];
      document.getElementById("opt4").innerHTML=parts[5];
      document.getElementById("time").innerHTML=parts[7];
      if(parseInt(parts[9])>20)
      {
        window.location = "http://192.168.1.45/Ubid/timeup.php";
      }
      if(parseInt(parts[0])<=parseInt(parts[8]))
      {document.getElementById("page").action="giveans.php";

      }
      else
      {document.getElementById("page").action="checkans.php";

      }
      
      if(parseInt(parts[0])>parseInt(parts[8]))
      {
        document.getElementById("slider").style.display='block';
        }
        
      
      
      if(parseInt(parts[10]) == <?php echo $_SESSION['ID']; ?>)
      {window.location = "http://192.168.1.45/Ubid/myqn.php";

      }
      document.getElementById("strt").style.display='none';
      
      
      
      
    }

  }
  xhr.open("POST","game_back.php",true);
  xhr.send();
  if(parts[11]!="NULL")
      {if(part[11]==parts[2])
        {document.getElementById("opt1").classList.add("correct");

        }
        if(part[11]==parts[3])
        {document.getElementById("opt2").classList.add("correct");

        }
        if(part[11]==parts[4])
        {document.getElementById("opt3").classList.add("correct");

        }
        if(part[11]==parts[5])
        {document.getElementById("opt4").classList.add("correct");

        }

      }
}

function show_value(x)
{
 document.getElementById("slider_value").innerHTML=x;
 document.getElementById("slider_value").style.margin="0vw 0vw 0vw "+(x*1.75/5)+"vw";
}
setInterval(getData1, 500);

</script>

</head>
    <body >
        <div class="container" id="p1">
          
        <div class="user-container" id="users"></div>
        
        
        <?php if(isset($_SESSION['admin']) && $_SESSION['admin']==1 ) 
          {?><form method="post" action="start.php">
            <button id="strt" class="btn3" name="strtgame" type="submit">start game</button>
   </form>
          
           
            <?php
          }
          
          ?>
          
        <div class="game" id="game">
          <div class="qn" id="qn"></div>
          <div class="time-container" style="display: flex;">
          <i class="fa-solid fa-stopwatch"></i>
          <div class="time" id="time"></div>
          </div>
          <form method ="post" action="" id="page">
          <button type="submit" name="opt1" value="1" class="opt1" id="opt1" ></button>
          </br></br>
          <button type="submit" name="opt2" value="2" class="opt2" id="opt2" ></button>
          </br>
          </br>
          <button type="submit" name="opt3" value="3" class="opt3" id="opt3" ></button>
          </br></br>
          <button type="submit" name="opt4" value="4" class="opt4" id="opt4"> </button>
          <div class="slidecontainer" id="slider">
  <input type="range" min="0" max="50" value="0" class="slider" name="slider" id="myRange" onmouseover="show_value(this.value)" onclick="show_value(this.value)" onmousemove="show_value(this.value)" onchange="show_value(this.value)">
  <div class="slidervalue" id="slider_value">0</div>
</div>
        </div>
        </form>
        
        <button class="hide" id="btn" onclick="getData()">get</button>
        <button class="hide" id="btn1" onclick="getData1()">get</button>
        
</div>
<script src="https://kit.fontawesome.com/e1.45501c8.js" crossorigin="anonymous"></script>
</body>
    </html>
    