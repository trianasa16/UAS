<?php
include 'koneksi.php';

$id = $_POST['id'];
$nim_mahasiswa = $_POST['nim_mahasiswa'];
$alasan = $_POST['alasan'];
$tanggal_izin = $_POST['tanggal_izin'];

$sql = "UPDATE surat_izin SET nim_mahasiswa='$nim_mahasiswa', alasan='$alasan', tanggal_izin='$tanggal_izin' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data berhasil diupdate!'); window.location='index.php';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>