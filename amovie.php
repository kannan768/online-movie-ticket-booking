

<html>
<head>
<body>

<h1>
<center>
<p>Welcome!!It's Popcorn Time</p>
<p>Select the movie and number of seats!!!</p>
<p>Ticket Cost:120/-
</p>
<p>Seats Available:<?php session_start();echo $_SESSION['avail_seat'];?>
</p>
</center>
</h1>
<div id="frm">
  <form action="abook.php" method="POST">
   <label>MOVIE:</label>
  <select name="movie">
<option value="Master">Master</option>
<option value="Soorarai potru">Soorarai potru</option>
<option value="Poniyin Selvan">Poniyin Selvan</option>
<option value="KGF-2">KGF-2</option>
<option value="Indian-2">Indian-2</option>
</select>
<label>SEATS:</label> 
 <select name="seat">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
</select>
<input type="submit" id="submit" value="Continue.." />

</form>
<a href="update.php">Seats Update</a>
</div>



</body>
<style>
label{
color:yellow;
}
select{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
a
{
color:yellow;
font-size:20px;
}
h1{
color:white;
}
body{
background-image:url("4.jpg");
 background-repeat: no-repeat;
  background-size:  1620px 960px;
}


#frm
{
  font-size:90%;
   width:20%;
   border-radius:5px;
   margin:100px auto;
 
  padding:50px;
}
#submit
{
color:#fff;
background:#337ab7;
padding:10px;
margin-left:89%;}
</style>
</head>
</html>
