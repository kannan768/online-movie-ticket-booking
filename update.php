<?php
session_start();
?>
<html>
<body>
<h2>
<center>
<p>Check your details</p>
<div id="frm">
  <form action="useat.php" method="POST">
   <p>
  <label>ENTER No. OF SEATS :</label>
<input type="text" name="nseat">
</p>
<input type="submit" id="btn" value="update.."/>
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
