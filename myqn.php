<?php session_start(); ?>
<html>
  <head>
<script>
  function getData3() {
  
  var xr1=new XMLHttpRequest();
  
  xr1.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("result").innerHTML=this.responseText;
      
    }
    
      
      
    
    

    xr1.open("POST","myqn_back.php",true); 
  xr1.send();
}
}
  var parts;
    function getData2() {
  
  var xr=new XMLHttpRequest();
  
  xr.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      parts=this.responseText.split('|');
      
    }
    document.getElementById("qn").innerHTML=parts[1];
      document.getElementById("opt1").innerHTML=parts[2];
      document.getElementById("opt2").innerHTML=parts[3];
      document.getElementById("opt3").innerHTML=parts[4];
      document.getElementById("opt4").innerHTML=parts[5];
      
      if(parseInt(parts[10])!=<?php echo $_SESSION['ID']; ?>)
      {
        window.location = "http://192.168.1.40/Ubid/join_room.php";
      }
    }

    xr.open("POST","game_back.php",true); 
  xr.send();
}


setInterval(getData2,1000);
SetInterval(getData3,1000);
    </script>
    </head>
    <body>
    Your qn being displayed
  
    <div class="qn" id="qn"></div>
    <div class="opt1" id="opt1"></div>    
    <div class="opt2" id="opt2"></div>
    <div class="opt3" id="opt3"></div>
    <div class="opt4" id="opt4"></div>    
    <div class="result" id="result"></div>
</body>
    </html>