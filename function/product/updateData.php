<?php
include "../connection.php";
$id = $_GET['id'];
$nama_barang = $_POST['nama-barang'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];

$query = "UPDATE produk SET `NamaProduk` = '$nama_barang', `stok` = '$stok', `harga` = '$harga' WHERE ProdukID = $id";
$mysql = mysqli_query($conn, $query);
if ($mysql) {
    header('location: ./../../admin/admin.php?url=produk');
} else {
    echo "<script>alert('Data gagal diupdate');window.location='./../../admin/admin.php?url=produk';</script>";
}
