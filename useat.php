<?php
session_start();
$_SESSION['avail_seat']=$_POST['nseat'];
header('location:index.php')
?>