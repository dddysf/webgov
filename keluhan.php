<?php
session_start();
include('config.php');

$id=$_POST['id'];
$topik=S_POST['topik'];
$keluhan=S_POST['keluhan'];

mysql_query("INSERT INTO tb_keluhan(ID_masyarakat, topik, keluhan)VALUES('$id', '$topik', '$keluhan')");
//header("location: lol.php");
mysql_close($con);
?>