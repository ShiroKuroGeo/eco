<?php 
session_start();
include 'inc/config.php'; 
session_unset();
session_destroy();
echo "success";
header("location: ../index.php"); 
?>