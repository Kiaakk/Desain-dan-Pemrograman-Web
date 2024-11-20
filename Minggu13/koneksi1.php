<?php
    // Parameter koneksi
    $serverName = "ADMIN"; // Nama server dan port
    $connectionOptions = [
        "Database" => "prakwebdb",
        "Uid" => "", // Masukkan username SQL Server
        "PWD" => "", // Masukkan password SQL Server
        "Encrypt" => true,
        "TrustServerCertificate" => true
    ];

    // Membuka koneksi
    $conn = sqlsrv_connect($serverName, $connectionOptions);

    if ($conn) {
        echo "Koneksi berhasil!";
    } else {
        echo "Error koneksi!" + $e->getMessage();
        die(print_r(sqlsrv_errors(), true));
    }
    // try {
    //     $dsn = "sqlsrv:Server=localhost,1433;Database=dbperpus";
    //     $username = ""; // Username SQL Server
    //     $password = ""; // Password SQL Server
    
    //     $conn = new PDO($dsn, $username, $password, [
    //         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    //     ]);
    
    //     echo "Koneksi berhasil!";
    // } catch (PDOException $e) {
    //     echo "Error koneksi: " . $e->getMessage();
    // }
?>
