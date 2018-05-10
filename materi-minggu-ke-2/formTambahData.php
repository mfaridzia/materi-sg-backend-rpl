<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Data</title>
</head>
<body>

    <form action="" method="POST">
        Nim : <input type="text" name="nim"> <br/>
        Nama : <input type="text" name="nama"> <br/>
        Jurusan : <input type="text" name="jurusan"> <br/>
        Umur: <input type="number" name="umur"> <br/>
        <button type="submit" name="simpan"> Kirim </button>
    </form>
    
    <?php 
        require_once ('config/koneksi.php');

        if(isset($_POST['simpan'])) {
            $insert = $db->prepare("INSERT INTO mahasiswa(nim, nama, jurusan, umur) VALUES(?, ?, ?, ?)");
            $insert->bind_param('isss', $nim, $nama, $jurusan, $umur);
            
            $nim     = $_POST['nim'];
            $nama    = $_POST['nama'];
            $jurusan = $_POST['jurusan'];   
            $umur    = $_POST['umur'];

            if($insert->execute()) {
                echo "Berhasil tambah data cuy!!!";
            } else {
                echo "Gagal tambah data cuy!";
            }

        }

    ?>
    
</body>
</html>