<?php
include 'koneksi.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM surat_izin WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Surat Izin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Update Surat Izin</h2>
        <form action="proses_update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
            <div class="mb-3">
                <label>NIM Mahasiswa</label>
                <input type="text" name="nim_mahasiswa" class="form-control" value="<?php echo $row['nim_mahasiswa']; ?>" required>
            </div>
            <div class="mb-3">
                <label>Alasan</label>
                <textarea name="alasan" class="form-control" required><?php echo $row['alasan']; ?></textarea>
            </div>
            <div class="mb-3">
                <label>Tanggal Izin</label>
                <input type="date" name="tanggal_izin" class="form-control" value="<?php echo $row['tanggal_izin']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>
</html>