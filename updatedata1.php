<?php
include 'connection.php';
if (isset($_POST["update"])) {
    $ID = $_POST["id"];
    $column_1 = $_POST["column_1"];
    $column_2 = $_POST["column_2"];

    mysqli_query($connection, "UPDATE your_table_name SET column_1='$column_1', column_2='$column_2' WHERE id_buku='$ID'");

    header("location:readdata.php");
}
?>