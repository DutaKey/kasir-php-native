<?php
include "../connection.php";

$nama_barang = $_POST['nama-barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

$query = "INSERT INTO produk (NamaProduk, Harga, Stok) VALUES ('$nama_barang', '$harga', '$stok')";
$sql = mysqli_query($conn, $query);

if ($sql) {
    header('location: ./../../admin/admin.php?url=produk');
} else {
    echo "<script>alert('Data gagal ditambahkan');window.location='./../../admin/admin.php?url=produk';</script>";
}
