<?php
include "../connection.php";
$id = $_GET['id'];
$nama_pelanggan = $_POST['nama-pelanggan'];
$alamat = $_POST['alamat'];
$nomor_telpon = $_POST['nomortelepon'];

$query = "UPDATE pelanggan SET NamaPelanggan = '$nama_pelanggan', Alamat = '$alamat', NomorTelpon = '$nomor_telpon' WHERE PelangganID = '$id'";
$mysql = mysqli_query($conn, $query);
if ($mysql) {
    header('location: ./../../admin/admin.php?url=pelanggan');
} else {
    echo "<script>alert('Data gagal diupdate');window.location='./../../admin/admin.php?url=pelanggan';</script>";
}
