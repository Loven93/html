<?php
    $nama_situs = "Optimus";
    $tahun_sekarang = date("Y");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nama_situs; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav>
        <div class="logo">
            <h2><?php echo $nama_situs; ?></h2>
        </div>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#tentang">Tentang</a></li>
            <li><a href="#mulai">Meme</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
    </nav>

    <header class="hero">
        <h1>Selamat Datang di OPTIMUFRIEND</h1>
        <p>Membangun komunitas meme Optimus Prime terbesar!</p>
        <a href="#mulai" class="btn">Bergabung Sekarang</a>
    </header>

    <main class="container" id="mulai">
        <section id="tentang" style="text-align: center; margin-bottom: 40px;">
            <h2>Autobots, Roll Out!</h2>
            <p>Tempat berkumpulnya para penggemar Optimus dengan selera humor tinggi.</p>
        </section>

        <section style="display: flex; justify-content: center;">
            <img src="optimus.jpg" alt="gambar_optimus" class="gambar-konten">
        </section>
    </main>
</body>
</html>