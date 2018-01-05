<?php
include 'config.php';

//menyimpan data ke dalam variabel
$name   = $_POST['name'];
$email  = $_POST['email'];
$phone = $_POST['phone'];
$message  = $_POST['message'];

//query SQL untuk insert data
$sql = "INSERT INTO tb_data_kontak (name, email, phone, message)
VALUES ('$name', '$email', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
    header ("location:dashboard.html");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>