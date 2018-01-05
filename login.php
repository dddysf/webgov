<?php
include('config.php');
if(isset($_POST['LOGIN'])){
	$idu = mysql_real_escape_string(htmlentities($_POST['idu']));
	$pass = mysql_real_escape_string(htmlentities(md5($_POST['idu'])));
 
	$sql = mysql_query("SELECT * FROM tb_data_user WHERE idu='$idu' AND pass='$pass'") or die(mysql_error());
	if(mysql_num_rows($sql) == 0){
		echo 'User tidak ditemukan';
	}else{
		$row = mysql_fetch_assoc($sql);
		if($row['level'] == 1){
			$_SESSION['admin']=$idu;
			echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="index.php";</script>';
		}else{
			$_SESSION['user']=$idu;
			echo '<script language="javascript">alert("Anda berhasil Login Guest!"); document.location="index.php";</script>';
		}
	}
}
header ("location:index.php");
?>