<?php
    $a = 10;
    $b = 5;

    $hasilTambah = $a + $b;
    $hasilKurang = $a - $b;
    $hasilKali = $a * $b;
    $hasilBagi = $a / $b;
    $sisaBagi = $a % $b;
    $pangkat = $a ** $b;

    echo "Hasil tambah  : $hasilTambah <br>";
    echo "Hasil kurang  : $hasilKurang <br>";
    echo "Hasil kali    : $hasilKali <br>";
    echo "Hasil bagi    : $hasilBagi <br>";
    echo "Sisa bagi     : $sisaBagi <br>";
    echo "Hasil pangkat : $pangkat <br>";
    echo "<br>";

    $hasilSama = $a == $b;
    $hasilTidakSama = $a != $b;
    $hasilLebihKecil = $a < $b;
    $hasilLebihBesar = $a > $b;
    $hasilLebihKecilSama = $a <= $b;
    $hasilLebihBesarSama = $a >= $b;

    echo "Hasil sama ($a == $b)                 : " . ($hasilSama ? 'true' : 'false') . "<br>";
    echo "Hasil tidak sama ($a != $b)           : " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
    echo "Hasil lebih kecil ($a < $b)           : " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
    echo "Hasil lebih besar ($a > $b)           : " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
    echo "Hasil lebih kecil sama ($a <= $b)     : " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
    echo "Hasil lebih besar sama ($a >= $b)     : " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br>";
    echo "<br>";


    $a = true;
    $b = false;

    echo "Nilai dari (a)    : " . ($a? 'true' : 'false') . "<br>";
    echo "Nilai dari (b)    : " . ($b? 'true' : 'false') . "<br>";

    $hasilAnd = $a && $b;
    $hasilOr = $a || $b;
    $hasilNotA = !$a;
    $hasilNotB = !$b;

    // karena kita menggunakan operator logika, maka nilai variabel a dan b saya ubah menjadi
    // a = true
    // b = false

    echo "Hasil a dan b (a && b)       : " . ($hasilAnd ? 'true' : 'false') . "<br>";
    echo "Hasil a atau b (a || b)      : " . ($hasilOr ? 'true' : 'false') . "<br>";
    echo "Hasil NOT a (!a)             : " . ($hasilNotA ? 'true' : 'false') . "<br>";
    echo "Hasil NOT b (!b)             : " . ($hasilNotB ? 'true' : 'false') . "<br>";
    echo "<br>";

    $a = 10;
    $b = 5;

    echo "Nilai a = $a, b = $b <br>";

    $a += $b;
    echo "Hasil a += b         : $a <br>"; // a = 10 + 5 = 15
    echo "<br>";

    echo "Nilai a = $a, b = $b <br>";
    $a -= $b;
    echo "Hasil a -= b         : $a <br>"; // a = 15 - 5 = 10

    echo "<br>";
    echo "Nilai a = $a, b = $b <br>";
    $a *= $b;
    echo "Hasil a *= b         : $a <br>"; // a = 10 * 5 = 50

    echo "<br>";
    echo "Nilai a = $a, b = $b <br>";
    $a /= $b;
    echo "Hasil a /= b         : $a <br>"; // a = 50 / 5 = 10

    echo "<br>";
    echo "Nilai a = $a, b = $b <br>";
    $a %= $b;
    echo "Hasil a %= b         : $a <br>"; // a = 10 % 5 = 0
        
    echo "<br>";

    $a = 10;
    $b = 5;
    $hasilIdentik = $a === $b;
    $hasilTidakIdentik = $a !== $b;

    echo "Nilai a = $a, dan b = $b <br><br>";
    echo "Hasil identik (a === b) : " . ($hasilIdentik? 'true' : 'false') . "<br>";
    echo "Hasil identik (a !== b) : " . ($hasilTidakIdentik? 'true' : 'false') . "<br>";
?>