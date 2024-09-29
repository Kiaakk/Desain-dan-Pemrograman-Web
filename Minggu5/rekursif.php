<?php
    // function tampikanHaloDunia() {
    //     echo "Halo dunia! <br>";

    //     tampikanHaloDunia();
    // }

    // tampikanHaloDunia();

    function tampilkanAngka(int $jumlah, int $indeks = 1) {
        echo "Perulangan ke-" . ($indeks) . "<br>";

        if ($indeks < $jumlah) {
            tampilkanAngka($jumlah, $indeks + 1);
        }
    }
    tampilkanAngka(20);
?>