<?php
// Pastikan path koneksi benar (keluar satu folder)
require_once '../koneksi.php'; 

$username = $_POST['username'];
$password = $_POST['password'];

try {
    // Query untuk mencari user
    $sql = "SELECT * FROM member WHERE username = :user AND password = :pass";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(':user', $username);
    $stmt->bindParam(':pass', $password);
    $stmt->execute();

    $user = $stmt->fetch();

    if ($user) {
        // JIKA LOGIN BERHASIL
        session_start();
        $_SESSION['MEMBER'] = $user;

        header("Location: ../index.php?hal=studies_list");
        exit(); 
        // ------------------------

    } else {
        // JIKA GAGAL
        echo "<script>
                alert('Username atau Password Salah!');
                window.location.href='../index.php?hal=login';
              </script>";
    }

    if ($user) {
    session_start();
    $_SESSION['MEMBER'] = $user; // Nama session harus sama dengan yang dicek di tabel

    // Sesuaikan parameter hal dengan nama di index.php
    header("Location: ../index.php?hal=studies_list");
    exit(); 
}
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>