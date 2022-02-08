<html>
    <head>
    <title>
</title>
<script>
function getVote() {
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("users").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","first_page.php",true);
  xmlhttp.send();
}
</script>
<link rel="stylesheet" href="global.css">
</head>
    <body>
        <div class="parent">
        <div class="users" id="users"></div>
        <button onclick="getvote()">get</button>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</body>
    </html>