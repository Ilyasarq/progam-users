<?php
include_once("koneksi.php");

$id =  $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM users WHERE id=$id");

header("location: index.php");