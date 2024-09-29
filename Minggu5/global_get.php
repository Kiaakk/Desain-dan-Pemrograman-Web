<!-- <?php
    $nama = @$_GET['nama']; // tanda @ agar tidak ada peringatan error ketika key-nya kosong
    $usia = @$_GET['usia']; // tanda @ agar tidak ada peringakan error ketika key-nya kosong

    echo "Hallo {$nama}! Apakah benar anda berusia {$usia} tahun?";
?> -->

<!-- <html>
    <head>

    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            Name: <input type="text" name="fname">
            <input type="submit">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // collect value of input field
                $name = $_POST['fname'];
                if (empty($name)) {
                    echo "Name is empty";
                } else {
                    echo $name;
                }
            }
        ?>
    </body>
</html> -->

<!-- <html>
    <head>

    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            Name <input type="text" name="fname">
            <input type="submit">
        </form>

        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name = $_REQUEST['fname'];
                if (empty($name)) {
                    echo "Name is empty";
                } else {
                    echo $name;
                }
            }
        ?>
    </body>
</html> -->

<?php
    $x = 75;
    $y = 25;

    function addition() {
        $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    }

    addition();
    echo $z;
?>