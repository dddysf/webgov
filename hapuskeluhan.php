<?php 
include 'config.php';

$no = $_GET['no'];

$sql = "DELETE FROM tb_data_keluhan WHERE no=$no";

if ($conn->query($sql) === TRUE) {
    header ("location:index.php?page=informasi");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>