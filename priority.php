<?php
session_start();

if(!isset($_SESSION['priority'])
{
 header('location:transact.php');
}
else
echo "wait and reload the page";
?>