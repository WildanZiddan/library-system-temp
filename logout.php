<?php 
session_start(); //Ensure the session is started
session_destroy(); //Ensure the session is destroyed
header("location:login.php"); //Make you back to login page and you should login again
?>