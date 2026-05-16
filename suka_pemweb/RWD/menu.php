<?php
$halaman_aktif = isset($_GET['hal']) ? $_GET['hal'] : 'home';
?>
<nav class="navbar navbar-expand-lg" style="background-color: #4B4038;;" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="img/celyy.jpeg" alt="Logo" width="40" height="40" class="rounded-circle">
      My Website
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link <?= ($halaman_aktif == 'home') ? 'active text-white fw-bold' : ''; ?>" href="index.php?hal=home">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?= ($halaman_aktif == 'about') ? 'active text-white fw-bold' : ''; ?>" href="index.php?hal=about">About Me</a>
          </li>

          <li class="nav-item">
            <a class="nav-link <?= ($halaman_aktif == 'contact') ? 'active text-white fw-bold' : ''; ?>" href="index.php?hal=contact">Contact Me</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?= ($halaman_aktif == 'jenis_list' || $halaman_aktif == 'studies_list') ? 'active text-white fw-bold' : ''; ?>"
              href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              My Studies
            </a>
            <ul class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="index.php?hal=level_list">Level</a></li>
              <li><a class="dropdown-item" href="index.php?hal=studies_list">Studies</a></li>
            </ul>
          </li>
        </ul>
        </li>
        <?php
        if (!isset($_SESSION['MEMBER'])) { //----belum/gagal login------
        ?>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link <?= ($halaman_aktif == 'login') ? 'active text-white fw-bold' : ''; ?>" href="index.php?hal=login">Login</a>
          </li>
        </ul>
        <?php
        } else { //---------user sudah login dan terotentikasi---------------
        ?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?= $_SESSION['MEMBER']['username'] . ' - ' . $_SESSION['MEMBER']['role'] ?>
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <?php
              if ($_SESSION['MEMBER']['role'] == 'admin') {
              ?>
                <li><a class="dropdown-item" href="#">Kelola User</a></li>
              <?php } ?>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
          </li>
        <?php } ?>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="text" name="keyword" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        <!-- hidden field untuk mengirim ke halaman produk cari -->
        <input type="hidden" name="hal" value="produk_cari" />
      </form>
    </div>
  </div>
</nav>