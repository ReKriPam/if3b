<?php
    // Mulai Session
    session_start();

    // Membuat Session
    $_SESSION['npm'] = 2226250002;
    $_SESSION['nama'] = "Readysna Krisna Pambudi";
    $_SESSION['login'] = true;

    // Cara Panggil Session
    echo "Nama : ".$_SESSION['nama'];
    echo "<br>Login : ".$_SESSION['login'];
?>