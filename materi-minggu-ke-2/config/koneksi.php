<?php

    $db = new mysqli('localhost', 'root', '', 'sg_backend_minggu_2');
    if($db->connect_errno) {
        echo "Gagal terkoneksi ke database ". $db->connect_error;
    }

?>