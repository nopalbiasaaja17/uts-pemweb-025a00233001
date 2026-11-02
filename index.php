<?php

declare(strict_types=1);

require_once 'functions.php';


?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Kafe & Mahasiswa - UTS Pemrograman Web</title>
    <link rel="stylesheet" href="style.css?v=2">
</head>
<body>
    <div class="container">
        <header>
            <img src="assets/logo-warkop.jpg" alt="Foto profil pengembang web Naufal" class="profil-foto">
            <h1>Warkop Berkah Santai</h1>
            <p>Sajian Kopi & Camilan Hangat Teman Nugas Mahasiswa</p>
            <nav>
                <a href="index.php" class="aktif">Profil</a>
                <a href="katalog.php">Katalog Menu</a>
            </nav>
        </header>

        <main>
            <section>
                <div class="profil-grid">   
                    <div class="profil-info">
                        <h2>Tentang Warkop</h2>
                <article>
                    <h3>Kenyamanan Tempat Nugas & Diskusi</h3>
                    <p>
                        Warkop Berkah Santai berdiri sejak tahun 2024 untuk menyediakan aneka sajian kopi, 
                        minuman segar, dan makanan ringan dengan harga terjangkau bagi kantong mahasiswa. 
                        Dilengkapi dengan Wi-Fi kencang dan colokan di setiap meja.
                    </p>
                </article>
                    </div>
                </div>
            </section>
        </main>

        <footer>
            <p>&copy; <?= date('Y') ?> Warkop Berkah Santai &bull; Dibuat oleh Naufal Taufiqurrohman</p>
        </footer>
    </div>
</body>
</html>
