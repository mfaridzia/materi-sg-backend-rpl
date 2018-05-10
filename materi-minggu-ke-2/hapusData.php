<?php
    require_once ('config/koneksi.php');

    $delete = $db->prepare("DELETE FROM mahasiswa WHERE nim=?");
    $delete->bind_param('i', $nim);
    
    $nim = $_GET['nim'];
    if($delete->execute()) {
        echo "Berhasil hapus data cuy!";
    } else {
        echo "Gagal Hapus Data!";
    }

?>