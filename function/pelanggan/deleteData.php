<?php
include "../connection.php";

$id = $_GET['id'];
$query = "DELETE FROM pelanggan WHERE PelangganID = $id";
$sql = mysqli_query($conn, $query);
if ($sql) {
    header('location: ./../../admin/admin.php?url=pelanggan');
} else {
    echo "<script>alert('Data gagal dihapus');window.location='./../../admin/admin.php?url=pelanggan';</script>";
}
