<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add users</title>
</head>
<body>
    <a href="index.php">GO TO HOME</a>
    <br><br>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>EMAIL</td>
                <td><input type="text" name="email"></td>
            </tr>
            <tr>
                <td>NO HP</td>
                <td><input type="text" name="no_hp"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit"></td>
            </tr>
        </table>
    </form>

    <?php
    if(isset($_POST['Submit'])) {
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];

        include_once("koneksi.php");

        $result = mysqli_query($conn, "INSERT INTO users(nama,email,no_hp) VALUES('$nama','$email','$no_hp')");

        echo "user berhasil di masukan. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>