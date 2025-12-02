<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h2>SI SEKOLAH | Data siswa </h2>
    <br/>
    <a href="tambah.php">+ Tambah data</a>
    <br/>
    <table border ="1">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $query = mysqli_query($koneksi,"select * from siswa");
        while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama']; ?></td>
                <td><?php echo $data['nim']; ?></td>
                <td><?php echo $data['alamat']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $data['id']; ?>">EDIT</a>
                    <a href="edit.php?id=<?php echo $data['id']; ?>">HAPUS</a>
                </td>
           </tr>
           <?php
        }
        ?>
    </table>
<body>
<html>
