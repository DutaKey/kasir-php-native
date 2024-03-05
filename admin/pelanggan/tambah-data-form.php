<form action="../function/pelanggan/addData.php" method="post">
    <div class="mb-3">
        <label for="nama-pelanggan" class="form-label">Nama Pelanggan</label>
        <input type="text" class="form-control" id="nama-pelanggan" name="nama-pelanggan" required>
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" required>
    </div>
    <div class="mb-3">
        <label for="nomortelepon" class="form-label">Nomor Telepon</label>
        <input type="number" class="form-control" id="nomortelepon" name="nomortelepon" required>
    </div>
    <button type="submit" class="btn btn-primary">Tambah Data</button>
    <a class="btn btn-danger" href="?url=pelanggan">Batal</a>
</form>