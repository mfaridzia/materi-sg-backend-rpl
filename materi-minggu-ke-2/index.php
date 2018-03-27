<table border="1">
    <tr>
        <th> NIM </th>
        <th> Nama </th>
        <th> Jurusan </th>
        <th> Umur </th>
        <th> Aksi </th>
    </tr>

    <?php
        require_once ('config/koneksi.php');    

        $query = $db->query("SELECT * FROM mahasiswa");
        while($data = $query->fetch_assoc()) {
    ?>

            <tr>
                <td> <?= $data['nim']; ?> </td>
                <td> <?= $data['nama']; ?> </td>
                <td> <?= $data['jurusan']; ?> </td>
                <td> <?= $data['umur']; ?> </td>  
                <td>
                    <a href='hapusData.php?nim=<?= $data['nim']?>'> Hapus </a> ||
                    <a href='updateData.php?nim=<?= $data['nim']?>'> Update </a>
                </td>              
            </tr>

    <?php } ?>

</table>