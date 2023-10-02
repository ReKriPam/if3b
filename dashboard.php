<?php
    // Halaman ini bisa diakses jika session npm = 2226250002

    session_start();
    if (isset($_SESSION['npm']) == 2226250001) {
        echo "Selamat Datang, ". $_SESSION['nama'];
        echo "<br> <a href= 'logout.php'>Logout</a>";
    } else {
        echo "Anda tidak diizinkan untuk mengakses halaman ini";
    }
?>