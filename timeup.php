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
    if(parts[0]=="0")
    {
    
    }
    else
    {
      if(parseInt(parts[9])<20)
      {
        window.location = "http://192.168.1.45/Ubid/join_room.php";
      }
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
      <div class="container container1">
<div class="game myque"><div class="timeup">Time UP </div>
<div class="nextque">Next Question starting ....</div> </div>
<div class="user-container result" id="result"></div></div>
</body>
</html>