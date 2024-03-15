<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input PHP</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2 class="mt-5">Form Input Data</h2>
        <form method="post" action="output.php">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="tgl_lahir" class="form-label">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" required>
            </div>
            <div class="mb-3">
                <label for="pekerjaan" class="form-label">Pekerjaan:</label>
                <select class="form-select" id="pekerjaan" name="pekerjaan" required>
                    <option value="Programmer">Programmer</option>
                    <option value="Desainer">Desainer</option>
                    <option value="Pengajar">Pengajar</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
</body>
</html>
