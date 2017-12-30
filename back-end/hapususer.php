<?php 
include 'config.php';

$idu = $_GET['iduser'];

$query = "DELETE from tb_data_user where idu ='iduser'";
mysqli_query($config, $query);

?>