<?php
include_once("koneksi.php");

if(isset($_POST['update'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $no_hp = $_POST['no_hp'];

    $result = mysqli_querry($conn, "UPDATE users SET nama='$nama',email='$email',no_hp='$no_hp', WHERE id=$id");

    header("location: index.php");
}
?>

<?php
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result)) 
{
    $nama = $user_data['nama'];
    $email = $user_data['email'];
    $no_hp = $user_data['no_hp'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER DATA</title>
</head>
<body>
    <a href="index.php">HOME</a>

    <form name="update_user" action="edit.php" method="post">
        <table border ="o">
        <tr>
                <td>NAMA</td>
                <td><input type="text" name="nama" value=<?php echo $name;?>></td>
            </tr>
            <tr>
                <td>EMAIL</td>
                <td><input type="text" name="email" value=<?php echo $email;?>></td>
            </tr>
            <tr>
                <td>No HP</td>
                <td><input type="text" name="no_hp" value=<?php echo $no_hp;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>