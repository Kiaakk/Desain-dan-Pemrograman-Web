<?php
    // Sebuah restoran memiliki 45 kursi di dalamnya. Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. Berapa persen kursi yang masih kosong di restoran tersebut?

    // kode program nya

    $kursi = 45;
    $kursiTerisi = 28;
    $kursiKosong = $kursi - $kursiTerisi;
    $persentaseKursiKosong = ($kursiKosong * 100) / $kursi;

    echo "Menghitung Persentase(%) Kursi Kosong <br><br>";
    echo "Total kursi   : $kursi <br>";
    echo "Kursi terisi  : $kursiTerisi <br>";
    echo "Kursi kosong  : $kursiKosong <br>";
    echo "Persentase kursi kosong : " . ($persentaseKursiKosong) . "% <br>";

?>