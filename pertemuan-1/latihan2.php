<?php
// data awal
$nama = "Celiboy";
$totalBelanja = 15000;
$nilai = 75;

//if else (total belanja)
if ($totalBelanja > 10000) {
    $ketBelanja = "Selamat $nama, Anda mendapatkan hadiah!";
} else {
    $ketBelanja = "Terimakasih $nama sudah berbelanja";'
}

// ternary (kellulusan)
$ketLulus = ($nilai >=60) ? "Lulus" : " Gagal";

// if multi kondisi (grade)
if ($nilai >= 85 && $nilai <= 100){
    $grade = "A";
} elseif ($nilai >= 70 && $nilai < 85) {
    $grade = "B";
} elseif ($nilai >= 60 && $nilai < 70) {
    $grade = "C";
} elseif ($nilai >= 30 && $nilai < 60) {
    $grade = "D";
} elseif ($nilai >= 10 && $nilai < 30) {
    $grade = "E";
} else {
    $grade = "-";
}

// switch case (predikat)
Switch ($grade) {
    case 'A':
        $predikat = "Sangat Baik";
        break;
    case 'B':
        $predikat = "Baik";
        break;
    case 'C':
        $predikat = "Cukup";
        break;
    case 'D':
        $predikat = "Kurang";
        break;
    case 'E':
        $predikat = "Sangat Kurang";
        break;
    default:
        $predikat = "-";
}


?>


<h3>Data Belanja</h3>
Nama Pelanggan: <?= $nama ?><br>
Total Belanja: Rp <?= $totalBelanja ?><br>
Keterangan: <?= $ketBelanja ?>
<hr>

<h3>Data Nilai</h3>
Nama Siswa: <?= $nama ?><br>
Nilai: <?= $nilai ?><br>
Status <?= $ketLulus ?><br>
Grade: <?= $grade ?>
Predikat; <?= $predikat ?>

