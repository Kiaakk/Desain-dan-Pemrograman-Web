<?php
    // $umur;
    // if (isset($umur) && $umur >= 18) {
    //     echo "Anda sudah dewasa.";
    // } else {
    //     echo "Anda belum dewasa atau variabel 'umur' tidak ditemukan.";
    // }

    $data = array(
        "nama" => "Jane",
        "usia" => 25
    );
    if (isset($data["nama"])) {
        echo "Nama: " . $data["nama"];
        echo "<br>";
    } else {
        echo "Variabel 'nama' tidak ditemukan dalam array.";
    }

    if (isset($data["usia"]) && $data["usia"] >= 18) {
        echo "Usia: " .$data["usia"];
        echo "<br>";
        echo "Anda sudah dewasa";
    } else {
        "Variabel 'usia' tidak ditemukan dalam array atau anda belum dewasa";
    }
?>