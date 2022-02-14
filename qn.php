<form method="post">
    <label for="">qn part 1</label>
    <input name="qn1" type=text>
    <label for="">qn part 2</label>
    <input name="qn2" type=text>
    <label for="">opt 1</label>
    <input name="opt1" type=text>
    <label for="">opt 2</label>
    <input name="opt2" type=text>
    <label for="">opt 3</label>
    <input name="opt3" type=text>
    <label for="">opt 4</label>
    <input name="opt4" type=text>
    <button name="submit" type="submit">submit</button>
</form>
<?php
if(isset($_POST['submit']))
{$conn=new mysqli("localhost","root" ,"","ubid");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      $qn1=$_POST['qn1'];
      $qn2=$_POST['qn2'];
      $opt1=$_POST['opt1'];
      $opt2=$_POST['opt2'];
      $opt3=$_POST['opt3'];
      $opt4=$_POST['opt4'];
      $query="INSERT INTO qnbank(qn1,qn2,opt1,opt2,opt3,opt4) VALUES('$qn1','$qn2','$opt1','$opt2','$opt3','$opt4');";
      $result=mysqli_query($conn,$query);
     echo  $result ;

}
?>