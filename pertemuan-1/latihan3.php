<?php
// form get
$nama = "";
$alamat = "";

if (isset($_GET['proses'])) {
    $nama = $_GET['nama'] ?? '';
    $alamat = $_GET['alamat'] ?? '';
}
?>

<h3>Form Get</h3>
<form method="get">
    <label>Nama</label><br>
    <input type="text>" name="nama"><br>

    <label>Alamat</label><br>
    <input name="alamat"><br>

    <input type="submit" name="proses" value="Simpan">
</form>

<hr>

<?php
$username = "";
$pw = "";

if (isset($_GET['proses'])) {
    $username = $_GET['username'] ?? '';
    $pw = $_GET['password'] ?? '';
}
?>

<h3>FORM POST</h3>
<form method="post">
    <label>Username</label><br>
    <input type="text>" name="username"><br>

    <label>Password</label><br>
    <input name="password"><br>

    <input type="submit" name="proses" value="Simpan">