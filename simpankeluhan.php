<?php
include 'config.php';

//menyimpan data ke dalam variabel
$no   = $_POST['no'];
$idu  = $_POST['iduser'];
$topik = $_POST['topik'];
$keluhan  = $_POST['keluhan'];

//query SQL untuk insert data
$query = "INSERT_INTO tb_data_jawaban SET no='$no' ,idu ='$iduser' , topik = '$topik' ,keluhan = '$keluhan'";

mysqli_query($config, $query);

//mengalihkan ke halaman index.php
header("location:index.php");
?>