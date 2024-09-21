<?php
    // Soal: Ada seorang guru ingin menghitung total nilai dari 10 siswa dalam ujian matematika.  Guru ini ingin mengabaikan dua nilai tertinggi dan dua nilai terendah. Bantu guru ini menghitung total nilai yang akan digunakan untuk menentukan nilai rata-rata setelah mengabaikan nilai tertinggi dan terendah. Berikut daftar nilai dari 10 siswa (85, 92, 78, 64, 90, 75, 88, 79, 70, 96)

    $nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

    $n = count($nilaiSiswa);

    for ($i=0; $i < $n; $i++) { 
        for ($j=0; $j < $n - 1 ; $j++) { 
            if ($nilaiSiswa[$j] > $nilaiSiswa[$j+1]) {
                $temp = $nilaiSiswa[$j];
                $nilaiSiswa[$j] = $nilaiSiswa[$j+1];
                $nilaiSiswa[$j+1] = $temp;
            }
        }
    }

    for ($i=0; $i < $n ; $i++) { 
        echo "Nilai indeks ke-$i = $nilaiSiswa[$i] <br>";
    }

    $totalNilai = 0;
    for ($i=2; $i < $n - 2 ; $i++) { 
        $totalNilai += $nilaiSiswa[$i];
    }
    echo "<br>";

    $rataRata = $totalNilai / ($n - 4);

    echo "Total nilai : $totalNilai <br>";
    echo "Rata-rata nilai : $rataRata <br>";
?>