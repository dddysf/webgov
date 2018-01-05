<?php
include 'config.php';

$idu   = $_POST['idu'];
$nama  = $_POST['nama'];
$email = $_POST['email'];
$pass  = $_POST['pass'];
$nohp  = $_POST['nohp'];

$sql = "INSERT INTO tb_data_user (idu, nama, email, pass, nohp)
VALUES ('$idu', '$nama', '$email', '$pass', '$nohp')";

if ($conn->query($sql) === TRUE) {
    header ("location:index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>