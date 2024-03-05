<form action="../function/product/addData.php" method="post">
    <div class="mb-3">
        <label for="nama-barang" class="form-label">Nama Barang</label>
        <input type="text" class="form-control" id="nama-barang" name="nama-barang" required>
    </div>
    <div class="mb-3">
        <label for="harga" class="form-label">Harga</label>
        <input type="number" class="form-control" id="harga" name="harga" required>
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label">Stok</label>
        <input type="number" class="form-control" id="stok" name="stok" required>
    </div>
    <button type="submit" class="btn btn-primary">Tambah Data</button>
    <a class="btn btn-danger" href="?url=produk">Batal</a>
</form>