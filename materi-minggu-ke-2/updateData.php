<!DOCTYPE html>
<html>
<head>
    <title>Form Update Data</title>
</head>
<body>

    <?php 
        require_once ('config/koneksi.php');

        if(isset($_POST['update'])) {
            $update = $db->prepare("UPDATE mahasiswa SET nama=?, jurusan=?, umur=? WHERE nim=?");
            $update->bind_param('sssi', $nama, $jurusan, $umur, $nim);
        
            $nama    = $_POST['nama'];
            $jurusan = $_POST['jurusan'];   
            $umur    = $_POST['umur'];
            $nim     = $_POST['nim'];

            if($update->execute()) {
                header("location: index.php");
            } else {
                echo "Gagal update data cuy!";
            }

        }

        $nim = $_GET['nim'];
        $select = $db->query("SELECT * FROM mahasiswa WHERE nim='$nim'");
        $data = $select->fetch_assoc();
        print_r($data)

    ?>

     <form action="" method="POST">
        Nim : <input type="text" name="nim" value="<?= $data['nim'];?>" readonly> <br/>
        Nama : <input type="text" name="nama" value="<?= $data['nama'];?>"> <br/>
        Jurusan : <input type="text" name="jurusan" value="<?= $data['jurusan'];?>"> <br/>
        Umur: <input type="number" name="umur" value="<?= $data['umur'];?>"> <br/>
        <button type="submit" name="update"> Update </button>
    </form>
    
</body>
</html>