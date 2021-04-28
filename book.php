<?php
 session_start();
 
$_SESSION['mov']=$_POST['movie'];
  $_SESSION['sea']=$_POST['seat'];   

?>


<html>
<body>
<h2>
<center>
<p>Check your details</p>
<div id="frm">
  <form action="transact.php" method="POST">
   <p>
  <label>MOVIE :</label>
<input type="text" name="movie" value="<?php echo $_POST['movie'];?>"/>
</p>
<p>
  <label>No. of SEAT :</label>
<input type="text" name="seat" value="<?php echo $_POST['seat'];?>"/ >
</p>
<label>TOTAL COST:</label>
<?php
$value=$_POST['seat']*120;
echo "$value/-";
?> 
<input type="submit" id="btn" value="Book.."/>
</form>
</div>
</body>
<style>
#frm
{
  color:yellow;
font-size:90%;
   width:20%;
   border-radius:5px;
   margin:100px auto;
 
  padding:50px;
}
#btn

{color:#fff;
background:#337ab7;
padding:5px;
margin-left:69%;
}

h2{
color:yellow;
}
body{
background-image:url("4.jpg");
 background-repeat: no-repeat;
  background-size: 1680px 800px;
}
</style>
</html>

