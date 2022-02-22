<script>
    function getData1() {
  var parts;
  var xhr=new XMLHttpRequest();
  xr.open("POST","game_back.php",true);
  xr.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      parts=this.responseText.split('|');
      
    }
    
      if(parseInt(parts[10])!=<?php echo $_SESSION['ID']; ?>)
      {document.getElementById("abv").innerHTML="Ac";
        window.location = "http://192.168.1.45/Ubid/join_room.php";
      }
    }

  
  xr.send();
}
setInterval(getData1,1000);
    </script>
    Your qn being displayed
    <div id="abv"></div>