<?php 
include_once("koneksi.php");

$result = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOMEPAGE</title>
</head>
<body>
    <a href="add.php">Add New User</a><br><br>

    <table width='80' border=1>
        <tr>
            <th>Nama</th> <th>Email</th> <th>No hp</th> <th>Update</th>
        </tr>
        <?php
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$user_data['nama']."</td>";
            echo "<td>".$user_data['email']."</td>";
            echo "<td>".$user_data['no_hp']."</td>";
            echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td><tr>";
        }
        ?>
    </table>
</body>
</html>