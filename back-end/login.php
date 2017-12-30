<?php 

require_once("config.php");

if(isset($_POST['login'])){ //jika telah menekan tombol login

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM tb_data_user, tb_data_admin WHERE username='$idu, $ida and password='$pass'";
    $stmt = $db->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        "$idu" => $idu,
        "$pass" => $pass
    );

    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if($user){
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: timeline.php");
        }
    }
}
?>
 