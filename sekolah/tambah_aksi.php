<?php

include 'koneksi.php';


$id -$_POST['id'];
$nama - $_POST['nama'];
$nim - $_POST['nim'];
$alamat - $_POST['alamat'];


mysqli_query($koneksi,"insert into siswa value('','$nama','$nim','$alamat')");


header("location:index.php");

?>