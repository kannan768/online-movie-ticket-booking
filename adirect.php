<?php
session_start();
$_SESSION['priority']=0;
header('location:index.php');
?>