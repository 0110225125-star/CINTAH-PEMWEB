<?php
// variabel bawaan PHP
echo 'Dokumen php saya ada di: '.$_SERVER['DOCUMENT_ROOT'];
echo '<br>Nama file ini: '.$_SERVER['SCRIPT_FILENAME'];
echo '<hr>';


//variabel
$namaSiswa = "Celiboyy";
$tgl lahir = "04 september 2008"
$anak ke = "2 (dua)"
$umur = 17;
$berat_badan = 60;
$_pekerjaan = 'Mahasiswa'; 


// cetak variabel
echo 'Nama Siswa: '.$namaSiswa;
echo '<br/>Umur: '.$umur.' tahun';
echo '<br/>Berat Badan 1: '.$berat_badan.' kg';
echo "<br/>Berat Badan 2: $berat_badan kg";
echo '<br/>Pekerjaan 1: '.$_pekerjaan;
print '<br/>Pekerjaan 2: '.$_pekerjaan;

// cetak variabel
echo "<br/>Nama Siswa 1: $namaSiswa";
echo "<br/>Nama Siswa 2: $namaSiswa $_pekerjaan";
echo "<br/>Umur: ".($umur + $berat_badan)." tahun";
echo "<br/>Berat Badan: $berat_badan kg";
echo "<br/>Pekerjaan: $_pekerjaan";
echo '<hr>';

// variabel konstanta
$jari2 = 15;
define('PHI', 3.14);
$luas = PHI * $jari2 * $jari2;
echo "Luas lingkaran dengan jari-jari $jari2 = $luas";
echo '<hr>';

?>