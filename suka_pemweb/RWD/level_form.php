<?php
// Ambil ID dari URL (untuk mode Edit)
$id = $_REQUEST['id'] ?? '';
$obj_level = new Level();

// Jika ada ID, berarti mode EDIT, ambil data lama
if (!empty($id)) {
    $row = $obj_level->getLevel($id);
} else {
    $row = [];
}
?>

<div class="container px-5 my-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h3 class="mb-0">Form Level</h3>
        </div>
        <div class="card-body">
            <form method="POST" action="/suka_pemweb/RWD/controller/levelController.php">
                    <label class="form-label">Nama Jenjang</label>
                    <input type="text" name="nama" class="form-control" 
                           placeholder="Masukkan Jenjang" 
                           value="<?= $row['nama'] ?? '' ?>" required>
                </div>

                <div class="text-center mt-4">
                    <?php if (empty($id)): ?>
                        <button type="submit" name="proses" value="simpan" class="btn btn-primary px-4">
                            <i class="bi bi-save"></i> Simpan
                        </button>
                    <?php else: ?>
                        <button type="submit" name="proses" value="ubah" class="btn btn-success">Update</button>
                        <input type="hidden" name="idx" value="<?= $id ?>">
                    <?php endif; ?>

                    <a href="index.php?hal=level_list" class="btn btn-secondary px-4">
                        <i class="bi bi-arrow-left"></i> Kembali
                    </a>
                </div>
            </form> </div>
    </div>
</div>