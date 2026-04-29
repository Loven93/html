<?php
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register - Tugas Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f7f6; padding: 50px 0; }
        .card { border: none; border-radius: 15px; box-shadow: 0 10px 20px rgba(0,0,0,0.05); }
        .result-box { background: #fff; border-left: 5px solid #0d6efd; padding: 20px; margin-top: 30px; border-radius: 8px; }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <!-- FORM LOGIN -->
        <div class="col-md-4 mb-4">
            <div class="card p-4">
                <h3 class="text-center mb-4">Login</h3>
                <form method="POST">
                    <input type="hidden" name="type" value="login">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email_login" class="form-control" required placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="pass_login" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Masuk</button>
                </form>
            </div>
        </div>

        <!-- FORM REGISTER (Lengkap dengan berbagai tipe input) -->
        <div class="col-md-6">
            <div class="card p-4">
                <h3 class="text-center mb-4">Register</h3>
                <form method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="type" value="register">
                    
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Nama Lengkap (Text)</label>
                            <input type="text" name="nama" class="form-control" placeholder="Nama Anda" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Umur (Number)</label>
                            <input type="number" name="umur" class="form-control" placeholder="0">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tanggal Lahir (Date)</label>
                        <input type="date" name="tgl_lahir" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Pekerjaan (Dropdown/Select)</label>
                        <select name="pekerjaan" class="form-select">
                            <option value="Mahasiswa">Mahasiswa</option>
                            <option value="Programmer">Programmer</option>
                            <option value="Desainer">Desainer</option>
                            <option value="Pengusaha">Pengusaha</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Foto Profil (File)</label>
                        <input type="file" name="foto" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat Lengkap (Textarea)</label>
                        <textarea name="alamat" class="form-control" rows="3" placeholder="Tulis alamat rumah..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-success w-100">Daftar Sekarang</button>
                </form>
            </div>
        </div>
    </div>

    <!-- HASIL OUTPUT DATA DENGAN ECHO -->
    <div class="row justify-content-center">
        <div class="col-md-10">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<div class='result-box shadow-sm'>";
                echo "<h4 class='text-primary'>Hasil Data yang Diterima:</h4><hr>";
                
                if ($_POST['type'] == 'login') {
                    echo "<strong>Tipe Form:</strong> Login<br>";
                    echo "<strong>Email:</strong> " . htmlspecialchars($_POST['email_login']) . "<br>";
                    echo "<strong>Password:</strong> " . htmlspecialchars($_POST['pass_login']) . " (Data Mentah)";
                } else {
                    echo "<strong>Tipe Form:</strong> Register<br>";
                    echo "<strong>Nama:</strong> " . htmlspecialchars($_POST['nama']) . "<br>";
                    echo "<strong>Umur:</strong> " . htmlspecialchars($_POST['umur']) . " Tahun<br>";
                    echo "<strong>Tanggal Lahir:</strong> " . htmlspecialchars($_POST['tgl_lahir']) . "<br>";
                    echo "<strong>Pekerjaan:</strong> " . htmlspecialchars($_POST['pekerjaan']) . "<br>";
                    echo "<strong>Alamat:</strong> " . nl2br(htmlspecialchars($_POST['alamat'])) . "<br>";
                    
                    if (isset($_FILES['foto'])) {
                        echo "<strong>Nama File Foto:</strong> " . $_FILES['foto']['name'];
                    }
                }
                echo "</div>";
            }
            ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>