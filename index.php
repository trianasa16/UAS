<?php
include 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM surat_izin");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Surat Izin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Data Surat Izin</h2>
        <table class="table">
            <tr>
                <th>ID</th>
                <th>NIM</th>
                <th>Alasan</th>
                <th>Tanggal Izin</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nim_mahasiswa']; ?></td>
                <td><?php echo $row['alasan']; ?></td>
                <td><?php echo $row['tanggal_izin']; ?></td>
            </tr>
            <?php } ?>
        </table>
        <div class="text-end mb-3">
        <a href="form_surat.php" class="btn btn-success btn-sm mb-3">Create</a>
        <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm mb-3">Update</a>
        <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm mb-3" onclick="return confirm ('Yakin ingin menghapus?'")>Delete</a>
        </div>
    </div>
</body>
</html>

<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>