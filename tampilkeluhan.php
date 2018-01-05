
<?php
include 'config.php';

//membuat query select
$sql = "SELECT * FROM tb_data_keluhan";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
// output data of each row
    while($row = $result->fetch_assoc()) {
    echo "
        <tr>
        <td>".$row['no']."</td>
        <td>".$row['idu']."</td>
        <td>".$row['topik']."</td>
        <td>".$row['keluhan']."</td>
        <td>
        <a class='btn btn-info btn-xs' href='editkeluhan.php?no=$row[no]'>EDIT </a>
        <a class='btn btn-danger btn-xs' href='hapuskeluhan.php?no=$row[no]'>HAPUS </a>
        </td>
        </tr>";
    }

} else {
    echo "0 results";
}
    $conn->close();
?>