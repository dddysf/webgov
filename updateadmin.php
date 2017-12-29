<?php
include 'config.php';

$$idu   = $_POST['idadmin'];
$nama  = $_POST['nama'];
$email = $_POST['email'];
$pass  = $_POST['pass'];
$jabatan  = $_POST['jabatan'];
$kodejabatan = $_POST['kodejabatan']

$query = "UPDATE tb_data_admin SET ida='$idadmin' ,nama ='$nama' , email = '$email' ,pass = '$pass' ,jabatan ='$jabatan' ,kodejabatan ='$kodejabatan'";

mysqli_query($config, $query);

?>