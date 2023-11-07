<!-- 
=============== fyi ================
======My table name is "Admin"======
My table have:
1. login_id > with primary key and auto increment
2. role
3. username
4. password

You can change the name like whatever you want.
-->


<?php
session_start(); //Ensure the session is started
if(isset($_SESSION['username'])) //Checks if you're have an account, you will be directed to the next page
{
    $_SESSION['username'] = $_SERVER['REQUEST_URI']; //Checks server
    $_SESSION['username'] = true; //Make an username session has a true value
    header("Location:home.php"); //Your destination
    exit;
}

include("connection.php");
if (isset($_POST['button_name'])){ //This statement will checks input form and it's will go to the next page when you click login button
    $username = mysqli_real_escape_string($connection, $_POST['username']); //Check input form and fetch with the database
    $password = $_POST['password']; //Check input password
    $select = "SELECT * FROM admin WHERE username = '$username' && password = '$password'"; //Take username and password from the table
    $result = mysqli_query($connection, $select); //it's a result from $connection and $select

    if(mysqli_num_rows($result) > 0 ){ //This statement make sure you can to the next page
        $row = mysqli_fetch_array($result); //This for fetching one row and check a result variable
        $name = $row['username']; //The variable name is "name", this variable want to read a row from username
        $_SESSION['username'] = $name; 
        header('location:home.php'); //A location you want to go
        exit;
    }
}
?>


<!-- Add this to the next page(homepage) for make it can't back if push browser back button/change directory -->
<script  text="text/javascript">
      window.history.forward();
</script>