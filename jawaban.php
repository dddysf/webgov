<?php
session_start();
include('config.php');

$id=$_POST['id'];
$topik=S_POST['topik'];
$jawaban=S_POST['jawaban'];

mysql_query("INSERT INTO tb_jawaban(ID_admin, topik, jawaban)VALUES('$id', '$topik', '$jawaban')");
//header("location: lol.php");
mysql_close($con);
?>