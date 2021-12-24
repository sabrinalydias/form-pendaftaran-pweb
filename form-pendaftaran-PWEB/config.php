<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "data-siswa";

$koneksi = mysqli_connect($server, $user, $password, $nama_database);

if( !$koneksi ){
    die("Mohon maaf, saat ini anda gagal terhubung dengan database: " . mysqli_connect_error());
}
?>