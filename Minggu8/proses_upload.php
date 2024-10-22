<?php
    // Lokasi penyimpanan file yang diunggah
    $targetDirectory = "documents/";

    // Periksa apakah direktori penyimpanan ada, jika tidak maka buat
    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0777, true);
    }

    $allowedExtensions = array("jpg", "jpeg", "png");
    $maxSize = 5 * 1024 * 1024;

    if ($_FILES['files']['name'][0]) {
        $totalFiles = count($_FILES['files']['name']);

        // Loop melalui semua file yang diunggah
        for ($i = 0; $i < $totalFiles; $i++)  { 
            $fileName = $_FILES['files']['name'][$i];
            $targetFile = $targetDirectory . $fileName;
            $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            if (in_array($fileType, $allowedExtensions) && $_FILES['files']['size'][$i] <= $maxSize) {
                if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                    echo "File $fileName berhasil diunggah. <br>";
                } else {
                    echo "Gagal mengunggah file $fileName. <br>";
                }
            } else {
                echo "Format file $fileName tidak valid atau lebih dari 5MB. <br>";
            }
        }
    } else {
        echo "Tidak ada file yang diunggah";
    }

?>