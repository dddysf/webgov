<?php
session_start();

// isi nama host, username mysql, dan password mysql anda
mysql_connect("localhost", "root", "root");

if($host){
	echo "koneksi host berhasil.<br/>";
}else{
	echo "koneksi gagal.<br/>";
}

// isikan dengan nama database yang akan di hubungkan
mysql_select_db("db_webgov");

 
if($db){
	echo "koneksi database berhasil.";
}else{
	echo "koneksi database gagal.";
}
?>