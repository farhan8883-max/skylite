<?php
    include "service/database.php";
    // jangan lupa tag di bawah
    session_start();

    $registrasi_message = "";
    
    // ini buat nge block login dan registrasi agar tidak terulang

    if(isset($_SESSION["is_login"])) {
        header("location: dashboard.php");
     }

    if(isset($_POST["registrasi"])){
         // varible include
        $username = $_POST["username"];
        $password = $_POST["password"];
        // nanti lagi menit ke 1:15:22
        $hash_password = hash("sha256", $password);
        // menahan eror
        try {
            $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hash_password')";

            if($db->query($sql)) {
              $registrasi_message = "daftar akun berhasil, silahkan login";
            }else {
              $registrasi_message = "daftar akun gagal, silahkan coba lagi";
            }

        } catch (mysqli_sql_exception) {
            $registrasi_message = "username sudah di gunakan";
        }
        // tolong di hapus
        $db->close();
       
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="semua.css">
</head>
<body>
    <div class="wrapper">  
        <div class="input-field">
            <!-- memasukkan php -->
            <?php include "layout/header.html" ?>
            <!-- form daftar akun -->
            <form action="registrasi.php" method="POST">
                <h3>Daftar akun</h3>
                <i><?= $registrasi_message  ?></i>

                <input type="text" placeholder="username" name="username"/>
                <input type="password" placeholder="password" name="password"/>
                <button type="submit" name="registrasi">Daftar sekarang</button>
            </form>

            <?php include "layout/footer.html" ?>
        </div>
    </div>
</body>
</html>