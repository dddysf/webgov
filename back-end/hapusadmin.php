<?php 
include 'config.php';

$ida = $_GET['idadmin'];

$query = "DELETE from tb_data_admin where ida ='idadmin'";
mysqli_query($config, $query);

?>