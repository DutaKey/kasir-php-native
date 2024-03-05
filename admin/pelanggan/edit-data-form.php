<?php
include '../function/connection.php';
$query = "SELECT * FROM pelanggan WHERE PelangganID = '$_GET[id]'";
$sql = mysqli_query($conn, $query);
foreach ($sql as $data) {
?>
    <form action="../function/pelanggan/updateData.php?id=<?= $data['PelangganID'] ?>" method="post">
        <div class="mb-3">
            <label for="nama-pelanggan" class="form-label">Nama Pelanggan</label>
            <input type="text" class="form-control" id="nama-pelanggan" value="<?= $data['NamaPelanggan'] ?>" name="nama-pelanggan" required>
        </div>
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" value="<?= $data['Alamat'] ?>" name="alamat" required>
        </div>
        <div class="mb-3">
            <label for="nomortelepon" class="form-label">Nomor Telepon</label>
            <input type="number" class="form-control" id="nomortelepon" value="<?= $data['NomorTelpon'] ?>" name="nomortelepon" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Data</button>
        <a class="btn btn-danger" href="?url=pelanggan">Batal</a>
    </form>
<?php
}
?>