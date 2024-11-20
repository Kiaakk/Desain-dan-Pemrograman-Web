<?php
    // Konfigurasi koneksi ke database
    $serverName = "ADMIN"; // Nama server
    $connectionOptions = [
        "Database" => "prakwebdb", // Nama database
        "UID" => "sa", // Username database
        "PWD" => "miawmiaw", // Password database
        "CharacterSet" => "UTF-8" // Untuk memastikan encoding
    ];

    // Membuat koneksi
    $koneksi = sqlsrv_connect($serverName, $connectionOptions);

    // Periksa koneksi
    if ($koneksi === false) {
        die("Koneksi database gagal: " . print_r(sqlsrv_errors(), true));
    }
?>
