<?php session_start(); ?>
<html>
  <head>
  <link rel="stylesheet" href="global.css">
<script>
  
  var parts;
    function getData2() {
  
  var xr=new XMLHttpRequest();
  
  xr.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      parts=this.responseText.split('|');
      
    }
    <?php if(isset($_SESSION['total']) && isset($_SESSION['no']) && $_SESSION['no']>$_SESSION['total'])
      {
        header("location: http://".$_SERVER['HTTP_HOST']."/Ubid/results.php");
      }
      ?>
    document.getElementById("qn").innerHTML=parts[1];
      document.getElementById("opt1").innerHTML=parts[2];
      document.getElementById("opt2").innerHTML=parts[3];
      document.getElementById("opt3").innerHTML=parts[4];
      document.getElementById("opt4").innerHTML=parts[5];
      
      if(parseInt(parts[10]) != <?php echo $_SESSION['ID']; ?>)
      {
        window.location.href='/Ubid/join_room.php';
      }
    }

    xr.open("POST","game_back.php",true); 
  xr.send();
}


setInterval(getData2,1000);
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
      <div class="container container1">
      <div class="game myque">
   <div class="qndisplay"> Your qn being displayed</div></br>
</br>
    <div class="qnn" id="qn"></div>
    <div class="optt1" id="opt1"></div>    
    <div class="optt2" id="opt2"></div>
    <div class="optt3" id="opt3"></div>
    <div class="optt4" id="opt4"></div>    
</div>
    <div class="user-container result" id="result"></div>
</div>
</body>
    </html>