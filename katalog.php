?php

declare(strict_types=1);

require_once 'data.php';
require_once 'functions.php';

$totalMenu       = count($daftarMenu);
$totalTersedia   = hitungTotalTersedia($daftarMenu);
$rataRataHarga   = hitungRataRataHarga($daftarMenu);
$hargaTermurah   = min(array_column($daftarMenu, 'harga'));
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Menu - Warkop Berkah Santai</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header>
            <h1>Katalog Menu Warkop</h1>
            <p>Daftar Menu Makanan & Minuman Pilihan</p>
            <nav>
                <a href="index.php">Profil</a>
                <a href="katalog.php" class="aktif">Katalog Menu</a>
            </nav>
        </header>
        <main>
            <section>
                <h2>Ringkasan Menu</h2>
                <div class="kartu-ringkasan-grid">
                    <article class="kartu-stat">
                        <h3>Total Menu</h3>
                        <p class="angka"><?= e((string) $totalMenu) ?></p>
                    </article>
                    <article class="kartu-stat">
                        <h3>Menu Tersedia</h3>
                        <p class="angka"><?= e((string) $totalTersedia) ?></p>
                    </article>
                    <article class="kartu-stat">
                        <h3>Rata-rata Harga</h3>
                        <p class="angka"><?= e(formatRupiah((int) round($rataRataHarga))) ?></p>
                    </article>
                    <article class="kartu-stat">
                        <h3>Harga Termurah</h3>
                        <p class="angka"><?= e(formatRupiah($hargaTermurah)) ?></p>
                    </article>
                </div>
            </section>
            <section>
                <h2>Daftar Menu Lengkap</h2>
                <div class="tabel-wadah">
                    <table class="tabel-menu">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Menu</th>
                                <th>Kategori</th>
                                <th>Harga</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($daftarMenu as $index => $item): ?>
                                <tr>
                                    <td><?= $index + 1 ?></td>
                                    <td><strong><?= e($item['nama']) ?></strong></td>
                                    <td>
                                        <span class="badge badge-kategori">
                                            <?= e($item['kategori']) ?>
                                        </span>
                                    </td>
                                    <td><?= e(formatRupiah($item['harga'])) ?></td>
                                    <td>
                                        <!-- Percabangan if/else (Syarat Wajib B) -->
                                        <?php if ($item['tersedia']): ?>
                                            <span class="badge badge-tersedia">Tersedia</span>
                                        <?php else: ?>
                                            <span class="badge badge-habis">Habis</span>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </main>
        <footer>
            <p>&copy; <?= date('Y') ?> Warkop Berkah Santai &bull; Dibuat oleh Naufal Taufiqurrohman</p>
        </footer>
    </div>
</body>
</html>