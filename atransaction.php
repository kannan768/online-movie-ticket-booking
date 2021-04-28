<?php
session_start();
$_SESSION['avail_seat']=$_SESSION['avail_seat']-$_SESSION['asea'];
$_SESSION['mutex']=0;
$_SESSION['priority']=0;
?>

<html>
<body>
<center>
<h1>Successfully Booked!!!</h1></center>
<div id="middle">
<h2>
<p>------------Booked Details-----------</p>

<p>Movie name:  <?php echo $_SESSION['amov'];?></p>
<p>Seats :  <?php echo $_SESSION['asea'];?></p>
<p>Cost:   <?php echo $_SESSION['asea']*120;?></p>
<a href="movie.php"><h5>HOME</h3></a>
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