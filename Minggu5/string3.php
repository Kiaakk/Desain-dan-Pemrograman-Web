<?php
    $pesan = "Saya arek batam";
    $pesanPerKata = explode(" ", $pesan);
    $pesanPerKata = array_map(fn($pesan) => strrev($pesan), $pesanPerKata);
    $pesan = implode(" ", $pesanPerKata);

    echo $pesan . "<br>";
?>