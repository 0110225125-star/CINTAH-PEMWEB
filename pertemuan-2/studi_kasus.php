<?php
// 1. simpan data di array
$produk = [
    ['kode' => 'A1', 'nama' => 'apel', 'harga' => 25000],
    ['kode' => 'B1', 'nama' => 'mangga', 'harga' => 20000],
    ['kode' => 'C1', 'nama' => 'jeruk', 'harga' => 15000]
];

// 2. Menampilkan data produk pakai foreach
echo '<h3>DAFTAR PRODUK</h3>;
foreach ($produk as $p) {
    $p['kode']. "_".
    $p['nama']. "- Rp.".
    $p['harga']. "<br/>";
}

// 3. fungsi buat total harga
function totalHarga($harga1 + $harga2 + $harga3){
    return $harga1 + $harga2 + $harga3;
}

// 4. Hitung total belanja
$total = totalHarga(
    $produk[0]['harga'],
    $produk[1]['harga'],
    $produk[2]['harga']
);
echo '<br/><b>Total Belanja: Rp'.$total."</b>';
?>
