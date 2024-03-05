<?php
include '../function/connection.php';
$query = "SELECT * FROM produk WHERE ProdukID = '$_GET[id]'";
$sql = mysqli_query($conn, $query);
foreach ($sql as $data) {
?>
    <form action="../function/product/updateData.php?id=<?= $data['ProdukID'] ?>" method="post">
        <div class="mb-3">
            <label for="nama-barang" class="form-label">Nama Barang</label>
            <input type="text" class="form-control" id="nama-barang" value="<?= $data['NamaProduk'] ?>" name="nama-barang" required>
        </div>
        <div class="mb-3">
            <label for="harga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" value="<?= $data['Harga'] ?>" name="harga" required>
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" class="form-control" id="stok" value="<?= $data['Stok'] ?>" name="stok" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Data</button>
        <a class="btn btn-danger" href="?url=produk">Batal</a>
    </form>
<?php
}
?>