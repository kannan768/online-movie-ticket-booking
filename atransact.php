<?php
session_start();

if(!isset($_SESSION['mutex'])) 
         {$_SESSION['mutex']=1;
          header('location:seat_check.php');}
 
if($_SESSION['mutex']==1)
{
echo "Processing...Please do refresh the page";
}
else
 header('location:seat_check.php');

?>