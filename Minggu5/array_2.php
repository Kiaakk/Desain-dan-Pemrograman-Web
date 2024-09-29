<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" type="text/css" href="style2.css">
    </head>
    <body>
        <?php
            $dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];
        ?>

        <table>
            <tr>
                <th></th>
                <th>Data</th>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?php echo $dosen['nama']; ?></td>
            </tr>
            <tr>
                <td>Domisili</td>
                <td><?php echo $dosen['domisili']; ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><?php echo $dosen['jenis_kelamin']; ?></td>
            </tr>
        </table>
    </body>
</html>