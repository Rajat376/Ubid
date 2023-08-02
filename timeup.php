<html>
  <?php session_start(); ?>
  <head>
  <link rel="stylesheet" href="global.css">
<script>
    function getData1() {
  
  var xhr=new XMLHttpRequest();
  xhr.open("POST","game_back.php",true);
  xhr.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      parts=this.responseText.split('|');
      if(parseInt(parts[0])><?php echo $_SESSION['total']; ?>)
      {
        window.location.href='/Ubid/results.php';
      }
    
    }//document.write(parts[0]);
    if(parseInt(parts[0])!=0)
    {<?php if(isset($_SESSION['total']) && isset($_SESSION['no']) && $_SESSION['no']>$_SESSION['total'])
      {
        header("location: http://".$_SERVER['HTTP_HOST']."/Ubid/results.php");
      }
      ?>
      
      if(parseInt(parts[9])<20)
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
      <div class="container container1">
<div class="game myque"><div class="timeup">Time UP </div>
<div class="nextque">Next Question starting ....</div> </div>
<div class="user-container result" id="result"></div></div>
</body>
</html>