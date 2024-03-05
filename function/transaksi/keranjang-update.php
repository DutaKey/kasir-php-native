<?php
include '../connection.php';
session_start();

$Stok = $_POST['Stok'];
$cart = $_SESSION['cart'];

foreach ($cart as $key => $value) {
    $idbarang = $value['ProdukID'];
    $query = "SELECT Stok FROM produk WHERE ProdukId = '$idbarang'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $stok_produk = $row['Stok'];
    if ($Stok[$key] > $stok_produk) {
        $_SESSION['flash_message'] = "Stok yang ada hanya $stok_produk";
        header('location:../../admin/admin.php?url=transaksi');
        exit;
    }
    $_SESSION['cart'][$key]['Stok'] = $Stok[$key];
}
header('location:../../admin/admin.php?url=transaksi');
