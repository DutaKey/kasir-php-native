<?php
if (isset($_GET['proses'])) {
    $proses = $_GET['proses'];
    if ($proses == 'tambah') {
        include('./produk/tambah-data-form.php');
    } else if ($proses == 'edit') {
        include('./produk/edit-data-form.php');
    }
}
?>

<div>
    <a href="?url=produk&proses=tambah" class="btn btn-primary mt-2">
        Tambah Produk
    </a>
</div>

<table class="table ">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Produk</th>
            <th scope="col">ID Produk</th>
            <th scope="col">Harga</th>
            <th scope="col">Stok</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "./../function/connection.php";
        $no = 1;
        $query = "SELECT * FROM produk ORDER BY ProdukID DESC";
        $sql = mysqli_query($conn, $query);
        foreach ($sql as $item) {
        ?>
            <tr>
                <th scope="row"><?php echo $no++ ?></th>
                <td><?php echo $item['NamaProduk'] ?></td>
                <td><?php echo $item['ProdukID'] ?></td>
                <td><?php echo $item['Harga'] ?></td>
                <td><?php echo $item['Stok'] ?></td>
                <td>
                    <a href="?url=produk&proses=edit&id=<?php echo $item['ProdukID'] ?>" class="btn btn-warning">Edit</a>
                    <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="./../function/product/deleteData.php?id=<?php echo $item['ProdukID'] ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>