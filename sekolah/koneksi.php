<?php
$koneksi = mysqli_connect("localhost","root","","sekolah");

if (mysqli_connect_errno()){
    echo "koneksi database gagal : " . mysqily_connetc_error();
}
?>