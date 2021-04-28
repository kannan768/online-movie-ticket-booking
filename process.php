<?php
session_start();
if(!isset($_SESSION['check']))
{    $_SESSION['check']=0;
     $_SESSION['avail_seat']=3;
         $_SESSION['mutex'];
   
}
 $username=$_POST['user'];
 $password=$_POST['pass'];
 
$link=mysqli_connect("localhost","root","","movie");
$result=mysqli_query($link,"select * from login where username='$username' and password='$password' ");
$row= mysqli_fetch_array($result);

if($row['username']==$username && $row['password']==$password)
{
       if($_SESSION['avail_seat']==0 || $_SESSION['avail_seat']<0)
       {
         echo"SORRY ALL SEATS ARE BOOKED";
}
    if($username=="admin"){
         $_SESSION['priority']=1;
        header('location:amovie.php');
}
        
       else
           header('location:movie.php');
		

 }
            
else		  //incorrect username.
echo"failed to login";
  
?>