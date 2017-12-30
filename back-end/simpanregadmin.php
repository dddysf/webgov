<?php
include 'config.php';

//menyimpan data ke dalam variabel
$ida   = $_POST['idadmin'];
$nama  = $_POST['nama'];
$email = $_POST['email'];
$pass  = $_POST['pass'];
$jabatan  = $_POST['jabatan'];
$kodejabatan = $_POST['kodejabatan']

//query SQL untuk insert data
$query = "INSERT_INTO tb_data_admin SET ida='$ida' ,nama ='$nama' , email = '$email' ,pass = '$pass' ,jabatan = '$jabatan' ,kode jabatan = '$kodejabatan'";

mysqli_query($config, $query);

//mengalihkan ke halaman index.php
header("location:index.php");
?>