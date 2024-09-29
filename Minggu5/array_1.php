<!DOCTYPE html>

<html>
    <head>
    </head>
    <body>
        <h2>Array Terindeks</h2>
        <?php
            $listDosen = ["Elok Nur Hamdana","Unggul Pemenang", "Bagas Nugraha"];

            echo $listDosen[2] . "<br>";
            echo $listDosen[0] . "<br>";
            echo $listDosen[1] . "<br>";
            echo "<br>";

            for ($i=0; $i < count($listDosen) ; $i++) { 
                echo $listDosen[$i] . "<br>";
            }
            echo "<br>";

            foreach ($listDosen as $dosen) {
                echo $dosen . "<br>";
            }
        ?>
    </body>
</html>