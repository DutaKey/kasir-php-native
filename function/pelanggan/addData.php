<?php
include "../connection.php";

$nama_pelanggan = $_POST['nama-pelanggan'];
$alamat = $_POST['alamat'];
$nomor_telpon = $_POST['nomortelepon'];

$query = "INSERT INTO pelanggan (NamaPelanggan, Alamat, NomorTelpon) VALUES ('$nama_pelanggan', '$alamat', '$nomor_telpon')";
$sql = mysqli_query($conn, $query);

if ($sql) {
    header('location: ./../../../admin/admin.php?url=pelanggan');
} else {
    echo "<script>alert('Data gagal ditambahkan');window.location='./../../../admin/admin.php?url=pelanggan';</script>";
}
