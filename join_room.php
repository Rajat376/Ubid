<?php session_start();
echo $_SESSION['ID']; ?>
<html>
    <head>
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
function getData1() {
  
  var xhr=new XMLHttpRequest();
  xhr.open("POST","game_back.php",true);
  xhr.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      var parts=this.responseText.split('|');
      
    }//document.write(parts[0]);
    if(parts[0]=="0")
    document.getElementById("game").innerHTML=parts[1];
    else
    {document.getElementById("qn").innerHTML=parts[1];
      document.getElementById("opt1").innerHTML=parts[2];
      document.getElementById("opt2").innerHTML=parts[3];
      document.getElementById("opt3").innerHTML=parts[4];
      document.getElementById("opt4").innerHTML=parts[5];
    }
  }
 
  xhr.send();
}

</script>

</head>
    <body >
        <div class="parent1" id="p1">
          
        <div class="users" id="users">

        </div>
        <?php if(isset($_SESSION['admin']) && $_SESSION['admin']==1) 
          {?><form method="post">
            <button id="strt" class="btn3" name="strtgame" type="submit">start game</button>
   </form>
          
           
            <?php
          }
          ?>
        <div class="game" id="game">
          <div class="qn" id="qn"></div>
          <div class="opt1" id="opt1"></div>
          <div class="opt2" id="opt2"></div>
          <div class="opt3" id="opt3"></div>
          <div class="opt4" id="opt4"></div>
        </div>
        
        <button class="hide" id="btn" onclick="getData()">get</button>
        <button class="hide" id="btn1" onclick="getData1()">get</button>
</div>

</body>
    </html>
    <?php
    if(isset($_POST['strtgame']))
    { 
     $conn=new mysqli("localhost","root" ,"","ubid");
     if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
         
       }
       
     $query="UPDATE roomstart SET strt=1 WHERE roomname='".$_SESSION['room']."';";
     $result=mysqli_query($conn,$query);
     ?>
     <script> document.addEventListener('mouseover',()=>{document.getElementById('strt').style.display='none'; })</script>
     <?php
      }
    ?>