<?php
include 'config.php';

//membuat query select
$sql = "SELECT idu, nama, email, pass, nohp FROM tb_data_user";

$query = mysqli_query($config, $sql);

?>