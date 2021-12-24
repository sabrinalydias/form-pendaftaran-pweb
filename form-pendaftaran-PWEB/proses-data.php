<?php

include("config.php");

$nis        = "";
$nama       = "";
$alamat     = "";
$jurusan    = "";
$sukses     = "";
$error      = "";

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if($op == 'delete'){
    $id         = $_GET['id'];
    $sql1       = "delete from siswa where id = '$id'";
    $q1         = mysqli_query($koneksi,$sql1);
    if($q1){
        $sukses = "Berhasil hapus data";
    }else{
        $error  = "Gagal melakukan delete data";
    }
}
if ($op == 'edit') {
    $id         = $_GET['id'];
    $sql1       = "select * from siswa where id = '$id'";
    $q1         = mysqli_query($koneksi, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $nis        = $r1['nis'];
    $nama       = $r1['nama'];
    $alamat     = $r1['alamat'];
    $jurusan   = $r1['jurusan'];

    if ($nis == '') {
        $error = "Data tidak ditemukan";
    }
}
if (isset($_POST['simpan'])) { //untuk create
    $nis        = $_POST['nis'];
    $nama       = $_POST['nama'];
    $alamat     = $_POST['alamat'];
    $jurusan   = $_POST['jurusan'];

    if ($nis && $nama && $alamat && $jurusan) {
        //update data
        if ($op == 'edit') { 
            $sql1       = "update siswa set nis = '$nis',nama='$nama',alamat = '$alamat',jurusan='$jurusan' where id = '$id'";
            $q1         = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }
        } else { 
            //insert data
            $sql1   = "insert into siswa(nis,nama,alamat,jurusan) values ('$nis','$nama','$alamat','$jurusan')";
            $q1     = mysqli_query($koneksi, $sql1);
            if ($q1) {
                $sukses     = "Berhasil memasukkan data baru";
            } else {
                $error      = "Gagal memasukkan data baru";
            }
        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}

?>