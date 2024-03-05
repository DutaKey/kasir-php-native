<?php
include "../connection.php";

$id = $_GET['id'];
$query = "DELETE FROM produk WHERE ProdukID = $id";
$sql = mysqli_query($conn, $query);
if ($sql) {
    header('location: ./../../admin/admin.php?url=produk');
} else {
    echo "<script>alert('Data gagal dihapus');window.location='./../../admin/admin.php?url=produk';</script>";
}
