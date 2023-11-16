<!--
===== So guys, you can use this file on your book system or borrow system because they're have a same code. =====
===== This file is Read part of the CRUD function =====
-->

<?php
require "connection.php"; // This is for connects your database into your porject
$result = mysqli_query($connection, "SELECT * FROM your_table_name"); // For select your table from your database
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Data</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <table>
        <thead>
        <tr>
            <th scope="col">column 1</th> // You can add more column as you need
        </tr>
        </thead>
        
        <tbody>
        <?php 
            include 'connection.php';
            $pic = mysqli_query($conn, "SELECT * FROM your_table_name");
            while($row = mysqli_fetch_array($pic)) {
            // This code will connect you into your database and your table and read your table data by row
        ?>
        <tr>
            <td><?= $row["row_1"]; ?></td>
            <td>
                //This is will read primary key(main) has you been clicked
                <a href="updatedata.php? id=<?= $row['id'] ?>">Update</a> //Will direct you into your update form
                <a href="deletedata.php? id=<?= $row['id'] ?>">Delete</a> //Will direct you to your delete function
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</body>
</html>