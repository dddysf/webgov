<?php
include 'config.php';

//membuat query select
$sql = "SELECT ida, nama, email, pass, jabatan, kodejabatan FROM tb_data_admin";

$query = mysqli_query($config, $sql);

?>