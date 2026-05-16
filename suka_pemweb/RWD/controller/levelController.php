<?php
require_once '../koneksi.php';
require_once '../models/Level.php';

$proses = $_POST['proses'] ?? ''; 
$nama = $_POST['nama'] ?? '';
$idx = $_POST['idx'] ?? ''; // ID yang dikirim dari input hidden saat update

$obj_level = new Level();

switch ($proses) {
    case 'simpan':
        if (!empty($nama)) $obj_level->simpan([$nama]);
        break;

    case 'ubah':
        // Pastikan $idx tidak kosong agar database tahu mana yang harus diupdate
        if (!empty($nama) && !empty($idx)) {
            $obj_level->ubah([$nama, $idx]);
        }
        break;

    case 'hapus':
        $id_hapus = $_POST['id'] ?? '';
        if (!empty($id_hapus)) $obj_level->hapus($id_hapus);
        break;
}

// ARARAHKAN BALIK: Baris ini sangat penting agar tidak Not Found setelah simpan/update
// Kembali ke halaman daftar level setelah hapus
header('Location: ../index.php?hal=level_list');
exit;