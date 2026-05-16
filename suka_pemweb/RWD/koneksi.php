<?php
$host = 'localhost';
$db = 'db_webbbb';
$user = 'root';
$pass = '';

try {
    $dbh = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Terjadi kesalahan koneksi: " . $e->getMessage();
}
?>