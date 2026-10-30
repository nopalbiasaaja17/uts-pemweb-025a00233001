<?php

declare(strict_types=1);

require_once 'functions.php';

$namaMahasiswa = 'Naufal Taufiqurrohman';
$nimMahasiswa  = '025a00233001';
$kelas         = 'Informatika Semester 3';
$mataKuliah    = 'Pemrograman Web (253A23W15)';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Kafe & Mahasiswa - UTS Pemrograman Web</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Warkop Berkah Santai</h1>
            <p>Sajian Kopi & Camilan Hangat Teman Nugas Mahasiswa</p>
            <nav>
                <a href="index.php" class="aktif">Profil</a>
                <a href="katalog.php">Katalog Menu</a>
            </nav>
        </header>

        <main>
            <section>
                <h2>Profil Pengembang</h2>
                <div class="profil-grid">
                    <img src="assets/logo-warkop.jpg" alt="Foto profil pengembang web Naufal" class="profil-foto">
                    <div class="profil-info">
                        <table>
                            <tr>
                                <td class="label">Nama Lengkap</td>
                                <td>: <?= e($namaMahasiswa) ?></td>
                            </tr>
                            <tr>
                                <td class="label">NIM</td>
                                <td>: <?= e($nimMahasiswa) ?></td>
                            </tr>
                            <tr>
                                <td class="label">Kelas</td>
                                <td>: <?= e($kelas) ?></td>
                            </tr>
                            <tr>
                                <td class="label">Mata Kuliah</td>
                                <td>: <?= e($mataKuliah) ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </section>

            <section>
                <h2>Tentang Warkop</h2>
                <article>
                    <h3>Kenyamanan Tempat Nugas & Diskusi</h3>
                    <p>
                        Warkop Berkah Santai berdiri sejak tahun 2024 untuk menyediakan aneka sajian kopi, 
                        minuman segar, dan makanan ringan dengan harga terjangkau bagi kantong mahasiswa. 
                        Dilengkapi dengan Wi-Fi kencang dan colokan di setiap meja.
                    </p>
                </article>
            </section>
        </main>

        <footer>
            <p>&copy; <?= date('Y') ?> Warkop Berkah Santai &bull; Dibuat oleh <?= e($namaMahasiswa) ?></p>
        </footer>
    </div>
</body>
</html>
