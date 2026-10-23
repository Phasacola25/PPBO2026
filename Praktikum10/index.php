<?php

require_once "Product.php";

$product = new Product();
$editData = null;

// 1. Proses Tambah atau Update Data
if (isset($_POST['simpan'])) {
    $data = [
        'nama'      => $_POST['nama'],
        'deskripsi' => $_POST['deskripsi'],
        'harga'     => $_POST['harga'],
        'stok'      => $_POST['stok']
    ];

    if (!empty($_POST['id'])) {
        $product->update($_POST['id'], $data);
    } else {
        $product->save($data);
    }

    header("Location: index.php");
    exit;
}

// 2. Proses Hapus Data
if (isset($_GET['hapus'])) {
    $product->delete($_GET['hapus']);
    header("Location: index.php");
    exit;
}

// 3. Proses Ambil Data Saat Mode Edit
if (isset($_GET['edit'])) {
    $editData = $product->findById($_GET['edit']);
}

// 4. Ambil Seluruh Data Produk
$daftarProduk = $product->findAll();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Manajemen Produk</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #f4f4f4; }
        .box { background: #fff; padding: 20px; border-radius: 5px; margin-bottom: 20px; }
        .form-group { margin-bottom: 12px; }
        .form-group label { display: block; margin-bottom: 4px; font-weight: bold; }
        .form-group input, .form-group textarea { width: 100%; padding: 8px; box-sizing: border-box; }
        table { width: 100%; border-collapse: collapse; background: #fff; }
        th, td { border: 1px solid #ddd; padding: 10px; text-align: left; }
        th { background: #eee; }
        .btn { padding: 6px 12px; text-decoration: none; color: white; border: none; border-radius: 3px; cursor: pointer; }
        .btn-simpan { background: #28a745; }
        .btn-edit { background: #ffc107; color: black; }
        .btn-hapus { background: #dc3545; }
        .btn-batal { background: #6c757d; }
    </style>
</head>
<body>

    <h2>Manajemen Produk</h2>

    <!-- Form Input Data -->
    <div class="box">
        <h3><?= $editData ? "Edit Produk" : "Tambah Produk" ?></h3>
        <form method="POST" action="index.php">
            <input type="hidden" name="id" value="<?= $editData['id'] ?? '' ?>">

            <div class="form-group">
                <label>Nama Produk</label>
                <input type="text" name="nama" value="<?= $editData['nama'] ?? '' ?>" required>
            </div>

            <div class="form-group">
                <label>Deskripsi</label>
                <textarea name="deskripsi" rows="3"><?= $editData['deskripsi'] ?? '' ?></textarea>
            </div>

            <div class="form-group">
                <label>Harga (Rp)</label>
                <input type="number" step="0.01" name="harga" value="<?= $editData['harga'] ?? '' ?>" required>
            </div>

            <div class="form-group">
                <label>Stok</label>
                <input type="number" name="stok" value="<?= $editData['stok'] ?? '0' ?>" required>
            </div>

            <button type="submit" name="simpan" class="btn btn-simpan">
                <?= $editData ? "Simpan Perubahan" : "Tambah Produk" ?>
            </button>

            <?php if ($editData): ?>
                <a href="index.php" class="btn btn-batal">Batal</a>
            <?php endif; ?>
        </form>
    </div>

    <!-- Tabel Output Data -->
    <div class="box">
        <h3>Daftar Produk</h3>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (count($daftarProduk) > 0): ?>
                    <?php foreach ($daftarProduk as $item): ?>
                        <tr>
                            <td><?= $item['id'] ?></td>
                            <td><?= htmlspecialchars($item['nama']) ?></td>
                            <td><?= htmlspecialchars($item['deskripsi']) ?></td>
                            <td>Rp <?= number_format((float)$item['harga'], 2, ',', '.') ?></td>
                            <td><?= $item['stok'] ?></td>
                            <td>
                                <a href="index.php?edit=<?= $item['id'] ?>" class="btn btn-edit">Edit</a>
                                <a href="index.php?hapus=<?= $item['id'] ?>" class="btn btn-hapus" onclick="return confirm('Hapus data ini?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6">Data belum tersedia.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

</body>
</html>