<?php
include 'config.php';

//membuat query select
$sql = 'SELECT no, idu, topik, keluhan, jawaban, ida, kodejabatan FROM tb_data_jawaban';

$query = mysqli_query($config, $sql);

?>