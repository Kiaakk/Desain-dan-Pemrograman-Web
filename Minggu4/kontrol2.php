<?php
    $diskon = 0.2;
    $hargaAwal = 120000;
    $hargaAkhir;

    echo "Pelanggan membeli sepatu dengan harga : Rp.$hargaAwal <br>";
    echo "Toko menawarkan diskon sebesar 20% untuk pembelian diatas Rp.100.000 <br>";
    if ($hargaAwal > 100000) {
        $potonganHarga = $hargaAwal * $diskon;
        $hargaAkhir = $hargaAwal - $potonganHarga;
    } else {
        $hargaAkhir = $hargaAwal;
    }

    echo "Harga awal : $hargaAwal <br>";
    echo "Potongan harga : $potonganHarga <br>";
    echo "Harga akhir : $hargaAkhir <br>";
?>