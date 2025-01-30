<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nim_mahasiswa = $_POST['nim_mahasiswa'];
    $alasan = $_POST['alasan'];
    $tanggal_izin = $_POST['tanggal_izin'];

    $sql = "INSERT INTO surat_izin (nim_mahasiswa, alasan, tanggal_izin) 
            VALUES ('$nim_mahasiswa', '$alasan', '$tanggal_izin')";

    if (mysqli_query($conn, $sql)) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>