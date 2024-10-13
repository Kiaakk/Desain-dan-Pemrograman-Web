<?php
    $input = $_POST['input'];
    echo "Nama: " . $input;
    echo "<br><br>";

    $email = $_POST['email'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email valid: " . $email;
    } else {
        echo "Email tidak valid. Silahkan masukkan email yang benar";
    }
    
?>