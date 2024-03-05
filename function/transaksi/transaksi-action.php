<?php
include '../connection.php';
session_start();
$bayar = preg_replace('/\D/', '', $_POST['bayar']);

$tanggal_waktu = date('Y-m-d H:i:s');
$nomor = rand(111111, 999999);
$total = $_POST['total'];
$kembali = $bayar - $total;
if ($bayar < $total) {
    $_SESSION['flash_message'] = "Uang anda kurang";
    header('location:../../admin/admin.php?url=transaksi');
    return;
}

mysqli_query($conn, "INSERT INTO transaksi (tanggal_waktu,nomor,total,bayar,kembali) VALUES ('$tanggal_waktu','$nomor','$total','$bayar','$kembali')");

$id_transaksi = mysqli_insert_id($conn);

foreach ($_SESSION['cart'] as $key => $value) {
    $id_barang = $value['ProdukID'];
    $harga = $value['Harga'];
    $Stok = $value['Stok'];
    $tot = $harga * $Stok;
    mysqli_query($conn, "UPDATE produk SET Stok = Stok - $Stok WHERE ProdukID = $id_barang");
    mysqli_query($conn, "INSERT INTO transaksi_detail (id_transaksi,ProdukID,harga,Stok,total) VALUES ('$id_transaksi','$id_barang','$harga','$Stok','$tot')");
}
$_SESSION['cart'] = [];
header("location:../../admin/transaksi_selesai.php?idtrx=" . $id_transaksi);
