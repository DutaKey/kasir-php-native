<?php
if (isset($_GET['proses'])) {
    $proses = $_GET['proses'];
    if ($proses == 'tambah') {
        include('./pelanggan/tambah-data-form.php');
    } else if ($proses == 'edit') {
        include('./pelanggan/edit-data-form.php');
    }
}
?>

<div>
    <a href="?url=pelanggan&proses=tambah" class="btn btn-primary mt-2">
        Tambah Pelanggan
    </a>
</div>

<table class="table ">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pelanggan</th>
            <th scope="col">Alamat</th>
            <th scope="col">Nomor Telpon</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "./../function/connection.php";
        $no = 1;
        $query = "SELECT * FROM pelanggan ORDER BY PelangganID DESC";
        $sql = mysqli_query($conn, $query);
        foreach ($sql as $item) {
        ?>
            <tr>
                <th scope="row"><?php echo $no++ ?></th>
                <td><?php echo $item['NamaPelanggan'] ?></td>
                <td><?php echo $item['Alamat'] ?></td>
                <td><?php echo $item['NomorTelpon'] ?></td>
                <td>
                    <a href="?url=pelanggan&proses=edit&id=<?php echo $item['PelangganID'] ?>" class="btn btn-warning">Edit</a>
                    <a onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" href="./../function/pelanggan/deleteData.php?id=<?php echo $item['PelangganID'] ?>" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>