<?php
    $loremIpsum = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Expedita, nulla eveniet! Inventore sequi aspernatur natus asperiores debitis amet magnam temporibus. Asperiores facere odio quos minima corporis suscipit voluptatibus recusandae illo.";

    echo "<p> {$loremIpsum} </p>";
    echo "Panjang karakter : " . strlen($loremIpsum) . "<br>";
    echo "Panjang kata : " . str_word_count($loremIpsum) . "<br>";
    echo "<p>" . strtoupper($loremIpsum) . "</p>";
    echo "<p>" . strtolower($loremIpsum) . "</p>";
?>