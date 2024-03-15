<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output Data PHP</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border: 1px solid #dee2e6;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,.1);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            border-radius: 10px 10px 0 0;
        }
        .card-body {
            padding: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2 class="text-center">Selamt datang!</h2>
            </div>
            <div class="card-body">
                <?php
                $nama = $_POST['nama'];
                $tgl_lahir = $_POST['tgl_lahir'];
                $pekerjaan = $_POST['pekerjaan'];

                // Menghitung umur
                $tgl_lahir_timestamp = strtotime($tgl_lahir);
                $umur = date('Y') - date('Y', $tgl_lahir_timestamp);
                if (date('md', $tgl_lahir_timestamp) > date('md')) {
                    $umur--;
                }

                // Menentukan gaji berdasarkan pekerjaan
                $gaji = 0;
                switch ($pekerjaan) {
                    case 'Programmer':
                        $gaji = 5000000;
                        break;
                    case 'Desainer':
                        $gaji = 4500000;
                        break;
                    case 'Pengajar':
                        $gaji = 4000000;
                        break;
                    default:
                        $gaji = 0;
                        break;
                }

                // Menampilkan output
                echo "<p class='lead'>Halo, $nama!</p>";
                echo "<p>Umur Anda adalah $umur tahun.</p>";
                echo "<p>Pekerjaan Anda adalah $pekerjaan dengan gaji Rp " . number_format($gaji, 0, ',', '.') . ".</p>";

                // Tombol kembali
                echo "<a href='input.php' class='btn btn-primary'>Kembali</a>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>
