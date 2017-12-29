<?php
include 'config.php';

//menyimpan data ke dalam variabel
$idu   = $_POST['iduser'];
$nama  = $_POST['nama'];
$email = $_POST['email'];
$pass  = $_POST['pass'];
$nohp  = $_POST['nohp'];

//query SQL untuk insert data
$query = "INSERT INTO tb_data_user SET idu='$idu' ,nama ='$nama' , email = '$email' ,pass = '$pass' ,nohp ='$nohp'";

mysqli_query($config, $query);

//mengalihkan ke halaman index.php
header("location:index.php");
?>