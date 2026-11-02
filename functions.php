<?php

declare(strict_types=1);

function e(string $nilai): string
{
    return htmlspecialchars($nilai, ENT_QUOTES, 'UTF-8');
}

function formatRupiah(int $nominal): string
{
    return 'Rp ' . number_format($nominal, 0, ',', '.');
}

function hitungRataRataHarga(array $daftar): float
{
    if (count($daftar) === 0) {
        return 0.0;
    }

    $semuaHarga = array_column($daftar, 'harga');
    $totalHarga = array_sum($semuaHarga);

    return $totalHarga / count($daftar);
}

function hitungTotalTersedia(array $daftar): int
{
    $menuTersedia = array_filter(
        $daftar,
        fn (array $item): bool => $item['tersedia'] === true
    );

    return count($menuTersedia);
}
