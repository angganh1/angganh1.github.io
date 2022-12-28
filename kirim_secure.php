<?php
    require('koneksi.php');
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("insert into user(`username`,`password`,`email`) values(?,?,?)");
    $stmt->bind_param("sss", $username, $password, $email);
    $stmt->execute();

    header("Location:index_secure.php?daftar_berhasil=1");
?>