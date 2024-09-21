<?php
$dataSiswa = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90]
];

$totalNilai = 0;
$jumlahSiswa = count($dataSiswa);

echo "Daftar nama siswa : <br>";
foreach ($dataSiswa as $nama) {
    echo "$nama[0], $nama[1] <br>";
}

foreach ($dataSiswa as $siswa) {
    $totalNilai += $siswa[1];
}

$rataRata = $totalNilai / $jumlahSiswa;
echo "<br>";
echo "Total siswa : $jumlahSiswa <br>";
echo "Total nilai siswa : $totalNilai <br>";

echo "Rata-rata nilai kelas: " . ($rataRata) . "<br><br>";

echo "Daftar siswa dengan nilai di atas rata-rata: <br>";
foreach ($dataSiswa as $siswa) {
    if ($siswa[1] > $rataRata) {
        echo $siswa[0] . ": " . $siswa[1] . "<br>";
    }
}
?>