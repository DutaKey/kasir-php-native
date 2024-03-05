<?php
include '../function/connection.php';
session_start();
$id_trx = $_GET['idtrx'];

$data = mysqli_query($conn, "SELECT * FROM transaksi WHERE id_transaksi='$id_trx'");
$trx = mysqli_fetch_assoc($data);
$detail = mysqli_query($conn, "SELECT transaksi_detail.*, produk.NamaProduk FROM `transaksi_detail` INNER JOIN produk ON transaksi_detail.ProdukID = produk.ProdukID WHERE transaksi_detail.id_transaksi='$id_trx'");
?>

<!doctype html>
<html lang="en">

<head>
    <title>Terimakasih Sudah Belanja</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body onload="window.print(); self.close();">
    <div align="center">
        <table width="500" border="0" cellpadding="1" cellspacing="0">
            <tr>
                <th class="text-center">Toko The Chip's<br>
                    Jl Ya'm Sabran<br>
                    Pontianak, Kalimantan Barat, 78217</th>
            </tr>
            <tr align="center">
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>#<?= $trx['nomor'] ?> | <?= date('d-m-Y H:i:s', strtotime($trx['tanggal_waktu'])) ?> Toko The Chip's</td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
        </table>
        <table width="500" border="0" cellpadding="3" cellspacing="0">
            <?php while ($row = mysqli_fetch_array($detail)) { ?>
                <tr>
                    <td valign="top">
                        <?= $row['NamaProduk'] ?>
                    </td>
                    <td valign="top"><?= $row['Stok'] ?></td>
                    <td valign="top" align="right"><?= number_format($row['Harga']) ?></td>
                    <td valign="top" align="right">
                        <?= number_format($row['total']) ?>
                    </td>
                </tr>
            <?php } ?>
            <tr>
                <td colspan="4">
                    <hr>
                </td>
            </tr>
            <tr>
                <td align="right" colspan="3">Total</td>
                <td align="right"><?= number_format($trx['total']) ?></td>
            </tr>
            <tr>
                <td align="right" colspan="3">Bayar</td>
                <td align="right"><?= number_format($trx['bayar']) ?></td>
            </tr>
            <tr>
                <td align="right" colspan="3">Kembali</td>
                <td align="right"><?= number_format($trx['kembali']) ?></td>
            </tr>
        </table>
        <table width="500" border="0" cellpadding="1" cellspacing="0">
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr class="d-flex justify-content-center">
                <th>Terima kasih, Selamat Belanja Kembali✨</th>
            </tr>
            <tr class="d-flex justify-content-center">
                <th>===== Layanan Konsumen ====</th>
            </tr>
            <tr class="d-flex justify-content-center">
                <th>SMS/CALL 08979395303 </th>
            </tr>
        </table>
    </div>
</body>