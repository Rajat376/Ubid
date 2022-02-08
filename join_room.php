<?php session_start(); ?>
<html>
    <head>
        <link rel="stylesheet" href="global.css">
    <title>
</title>
<script type="text/javascript">
  document.addEventListener('DOMContentLoaded',()=>{document.getElementById('btn');
  while(1)
  {btn.click()=true;}
btn.click()=true;})
document.addEventListener('mousemove',()=>{document.getElementById('btn');
  while(1)
  {btn.click()=true;}
btn.click()=true;})
document.addEventListener('mouseenter',()=>{document.getElementById('btn');
  while(1)
  {btn.click()=true;}
btn.click()=true;})

function getData() {
  
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("users").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","join_room_back.php",true);
  xmlhttp.send();
}

</script>

</head>
    <body >
        <div class="parent1" id="p1">
        <div class="users" id="users">

        </div>
        <button class="hide" id="btn" onclick="getData()">get</button>
</div>

</body>
    </html>