<?php
    // Mulai Session
    session_start();

    // Membuat Session
    $_SESSION['npm'] = 2226250001;
    $_SESSION['nama'] = "Readysna Krisna Pambudi";
    $_SESSION['login'] = true;

    // Cara Panggil Session
    echo $_SESSION['npm'];
?>