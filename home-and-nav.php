<?php
session_start(); //Ensure the session is started
include("connection.php"); //Read the database from Connection File(my connection file name is "connection.php", you can change it if you want another name)
if (!isset($_SESSION['username'])) { //This statement is for checks variable is set and is not NULL
    header("location:login.php"); //Your destination if your username is not already set
    exit;
}
?>

<!-- Add this script for make it can't back to login page if you push browser's back button/change directory -->
<script text="text/javascript">
      window.history.forward();
</script>

<!-- My navbar -->
<div class="navbar">
    <nav >
        <div class="logo"> <!-- In this property, you can add your logo -->
            <a href="#"><img src="logo_img.png" alt=""></a>
        </div>
        
        <ul class="nav-links">
            <?php if ($_SESSION['username'] === "admin") { ?> <!-- This statement will checks your name and will show this if you're an admin-->
            <li><a href="admin.php">Admin</a></li> <!-- Will direct you to the admin page -->
            <?php } ?> <!-- PHP Close tag -->
            <li><a href="your_php_file_name.php or html">Example</a></li> <!-- This is just an example link -->
            <li><a href="logout.php">Logout</a></li> <!-- This button has been connected with logout file and have session destroy for block you to back to homepage wiithout login  -->
        </ul>

    </nav>
</div>