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
        window.location = "http://192.168.1.40/Ubid/join_room.php";
      }
    }

  }
 
  xhr.send();
}
setInterval(getData1, 1000);
    </script>
Time UP 
Next Question starting .... 
