<table  border='1' Width='800'>  
    <tr>
        <th> USER ID</th>
        <th> NAMA </th>
        <th> EMAIL </th>
        <th> PASS </th>
        <th> NO HP </th>

    </tr>
    <?php
    include 'config.php';

    $sql = "SELECT * FROM tb_data_user";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "
    <tr>
    <td>".$row['idu']."</td>
    <td>".$row['nama']."</td>
    <td>".$row['email']."</td>
    <td>".$row['pass']."</td>
    <td>".$row['nohp']."</td>

    </tr> ";
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    ?>
</table>
