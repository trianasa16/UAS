<?php
include 'koneksi.php';

$id = $_GET['id'];

$sql = "DELETE FROM surat_izin WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Data berhasil dihapus!'); window.location='index.php';</script>";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>