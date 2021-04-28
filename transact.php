<?php
session_start();

if($_SESSION['priority']==0)
 { 
if(!isset($_SESSION['mutex'])) 
         {$_SESSION['mutex']=1;
          header('location:seat_check.php');}
 
if($_SESSION['mutex']==1)
{
echo "Processing...Please do refresh the page";
}
else
 header('location:seat_check.php');
}
else
echo"reload the page";
?>