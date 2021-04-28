<?php
session_start();
$_SESSION['mutex']=0;

?>
<html>
<body>
<center>
<h1>Seats are not available on your request</h1></center>
<div id="middle">
<h2>
<p>remaining seats:
<p><?php echo $_SESSION['avail_seat'];?>
</p>
<a href="adirect.php"><h5>LOGOUT</h3></a>

<a href="amovie.php"><h5>MOVIE</h3></a>
</div>


</body>
<style>
body
{
background-image:url("4.jpg");
background-size:1680px 780px;
}
h1{
color:yellow;
}
h5{
color:white;
}
#middle
{
color:yellow;
font-size:90%;
   width:20%;
   border-radius:5px;
   margin:100px auto;
 
  padding:50px;

}
</html>
