<?php
    session_start();
    //include koneksi
    if(isset($_SESSION['username'])) {
        if($_SESSION['typeuser'] != 'admin') {
            echo "Ente bukan admin nih!";
        } else {
            echo "Ente admin nih";
        }
    } else {
        echo "Login dulu cuy supaya bisa akses halaman!";
    }
?>