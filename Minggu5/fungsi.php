<?php
    // function perkenalan($nama, $salam="Assalamualaikum") {
    //     echo $salam. ", ";
    //     echo "Perkenalkan, nama saya " . $nama . "<br>";
    //     echo "Senang berkenalan dengan Anda <br>";
    // }

    // perkenalan("Hizkia Elsadanta", "Hallo");
    // echo "<hr>";

    // $saya = "Kiak";
    // $ucapanSalam = "Selamat pagi";

    // perkenalan($saya);

    function hitungUmur($thn_lahir, $thn_sekarang) {
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    function perkenalan($nama, $salam="Assalamualaikum") {
        echo $salam. ", ";
        echo "Perkenalkan, nama saya " . $nama . "<br>";

        echo "Saya berusia " . (hitungUmur(2003, 2024) . " tahun <br>");
        echo "Senang berkenalan dengan Anda <br>";
    }

    perkenalan("Kiak");
?>