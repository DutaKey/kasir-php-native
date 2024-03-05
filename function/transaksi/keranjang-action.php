<?php
include '../connection.php';
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $Stok = 1;
    $query = mysqli_query($conn, "SELECT * FROM produk WHERE ProdukID='$id'");
    if (mysqli_num_rows($query) > 0) {
        $b = mysqli_fetch_assoc($query);
        $barang = [
            'ProdukID' => $b['ProdukID'],
            'NamaProduk' => $b['NamaProduk'],
            'Harga' => $b['Harga'],
            'Stok' => $Stok,
        ];
        $_SESSION['cart'][] = $barang;
        header('location:../../admin/admin.php?url=transaksi');
    } else {
        $_SESSION['flash_message'] = "Produk tidak ditemukan dalam database.";
        header('location:../../admin/admin.php?url=transaksi');
    }
}
