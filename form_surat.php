<!DOCTYPE html>
<html>
<head>
    <title>Form Surat Izin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Form Surat Izin</h2>
        <form action="proses_form.php" method="post">
            <div class="mb-3">
                <label for="nim_mahasiswa" class="form-label">NIM Mahasiswa</label>
                <input type="text" name="nim_mahasiswa" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="alasan" class="form-label">Alasan</label>
                <textarea name="alasan" class="form-control" required></textarea>
            </div>
            <div class="mb-3">
                <label for="tanggal_izin" class="form-label">Tanggal Izin</label>
                <input type="date" name="tanggal_izin" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
</body>
</html>
