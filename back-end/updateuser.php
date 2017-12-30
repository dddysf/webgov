<?php
include 'config.php';

$$idu   = $_POST['iduser'];
$nama  = $_POST['nama'];
$email = $_POST['email'];
$pass  = $_POST['pass'];
$nohp  = $_POST['nohp'];

$query = "UPDATE tb_data_user SET idu='$iduser' ,nama ='$nama' , email = '$email' ,pass = '$pass' ,nohp ='$nohp'";

mysqli_query($config, $query);

?>