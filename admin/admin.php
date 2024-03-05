<?php
session_start();
if (!isset($_SESSION['id_petugas'])) {
    echo "<script>alert('Anda Harus Login Terlebih Dahulu');window.location='../admin.php';</script>";
    exit;
}
?>
<!doctype html>
<html lang="en">

<head>
    <title>Login Admin / Petugas Kasir</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>
    <div class="container mt-3">
        <h3>Aplikasi Kasir</h3>
        <div class="alert alert-info">
            Anda Login Sebagai <b>Administrator</b> Aplikasi Kasir
        </div>
        <a href="admin.php" class="btn btn-primary">Administrator</a>
        <a href="admin.php?url=produk" class="btn btn-primary">Produk</a>
        <a href="admin.php?url=pelanggan" class="btn btn-primary">Pelanggan</a>
        <a href="admin.php?url=transaksi" class="btn btn-primary">Transaksi</a>
        <a href="../function/logout.php" class="btn btn-danger">Logout</a>
        <div class="card mt-2 p-2">
            <?php
            $file = isset($_GET['url']) ? $_GET['url'] : '';
            if (empty($file)) {
                echo "<h1>Selamat Datang Di Halaman Administrator</h1>
                <p>
                    Silahkan klik menu diatas untuk mengelola data
                </p>";
            } else {
                $filePath = $file . ".php";
                if (file_exists($filePath)) {
                    include $filePath;
                } else {
                }
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>