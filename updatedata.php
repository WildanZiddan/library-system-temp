<?php
require "connection.php";

$ID = $_GET['id'];
$Record = mysqli_query($connection, "SELECT * FROM your_table_name WHERE id = $ID");
$data = mysqli_fetch_array($Record);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Record</title>
</head>
<body>
    <form method="POST" enctype="multipart/form-data" action="updatedata1.php">
        <label for="column_1">Column 1:</label>
        <td><input name="column_1" type="file" value="<?php echo $data['column_1']?>" required><img src="<?php echo $data['column_1']?>" alt="" width="85px" height="120px"></td><br>

        <label for="column_2">Column 2:</label>
        <input type="text" name="column_2" value="<?php echo $data['column_2']?>" required><br>

        <input type="hidden" name="id" value="<?php echo $data['id']?>">

        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>
