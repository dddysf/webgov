<?php
include 'config.php';

//menyimpan data ke dalam variabel
$no   = $_POST['no'];
$idu  = $_POST['iduser'];
$topik = $_POST['topik'];
$keluhan  = $_POST['keluhan'];
$jawaban  = $_POST['jawaban'];
$ida 	= $_POST['idadmin'];
$kodejabatan = $_POST['kodejabatan']

//query SQL untuk insert data
$query = "INSERT_INTO tb_data_jawaban SET no='$no' ,idu ='$iduser' , topik = '$topik' ,keluhan = '$keluhan' ,jawaban = '$jawaban' ,ida = '$idadmin' ,kodejabatan = '$kodejabatan'";

mysqli_query($config, $query);

//mengalihkan ke halaman index.php
header("location:index.php");
?>