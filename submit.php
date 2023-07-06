<?php
// Konfigurasi koneksi ke database

$koneksi = mysqli_connect("localhost", "root", "", "alumni");

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$angkatanTahun = $_POST['angkatan_tahun'];
$telepon = $_POST['telepon'];

// Menyimpan data ke database
$query = "INSERT INTO alumni VALUES('$nama', '$alamat', '$angkatanTahun', '$telepon')";



mysqli_query($koneksi, $query)
?>
