<?php
include 'config.php';

//menyimpan data ke dalam variabel
$no   = $_POST['no'];
$idu  = $_POST['idu'];
$topik = $_POST['topik'];
$keluhan  = $_POST['keluhan'];

//query SQL untuk insert data
$sql = "INSERT INTO tb_data_keluhan (no, idu, topik, keluhan)
VALUES ('$no', '$idu', '$topik', '$keluhan')";

if ($conn->query($sql) === TRUE) {
    header ("location:index.php?page=pengaduan");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>