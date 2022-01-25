<?php
include("config.php");

// cek apakah ada tombol daftar sudah di klik atau belum?
if (isset($_POST['edit'])) {

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // buat query
    $query  = "UPDATE pendaftaran SET nama = '$nama', alamat = '$alamat', jenis_kelamin = '$jk', agama = '$agama', sekolah_asal = '$sekolah'";
    $query .= "WHERE id = '$id'";
    $result = mysqli_query($db, $query);
    // periska query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($db) .
            " - " . mysqli_error($db));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
    }
} else {
    // buat query
    $query  = "UPDATE pendaftaran SET nama = '$nama', alamat = '$alamat', jenis_kelamin = '$jk', agama = '$agama', sekolah_asal = '$sekolah'";
    $query .= "WHERE id = '$id'";
    $result = mysqli_query($db, $query);
    // periska query apakah ada error
    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($db) .
            " - " . mysqli_error($db));
    } else {
        //tampil alert dan akan redirect ke halaman index.php
        //silahkan ganti index.php sesuai halaman yang akan dituju
        echo "<script>alert('Data berhasil diubah.');window.location='index.php';</script>";
    }
}
