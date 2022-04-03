<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8"> 
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    </head>
    <body>
        <h1>Data Mahasiswa</h1>
        <a href="form.php">Tambah Data </a> 
        <table width="90%" border="1" cellspacing="1">
            <tr>
                <td>ID MHS</td>
                <td>Nama Mahasiswa</td>
                <td>NIM Mahasiswa</td>
                <td>Alamat Mahasiswa</td>
                <td>Action</td>
            </tr>
                <?php
                include 'koneksi.php';
                $sql = "SELECT * FROM tbl_054";
                $hasil = mysqli_query($koneksi, $sql);
                while ($row = mysqli_fetch_array($hasil))
                {
                ?>
                <tr>
                    <td><?=$row['id_mhs'];?></td>
                    <td><?=$row['nama_mhs'];?></td>
                    <td><?=$row['nim_mhs'];?></td>
                    <td><?=$row['alamat_mhs'];?></td>
                    <td> <a href="form_edit.php?id=<?=$row['id_mhs']?>">Edit | <a href="delete.php?id=<?=$row['id_mhs']?>"> Delete</td>
                </tr>
                <?php }
                ?>
        </table>
    </body>
</html>