<?php
include '../model/databarang.php';

$data = select("SELECT * FROM databarang");
?>

<?php include '../layout/header.php'; ?>

<h3>Data Barang</h3>

<a href="tambahdatabarang.php" class="btn btn-light">Tambah Data Barang </a>
<table class="table table-danger table-borderless">
    <thead>
        <tr>
            <td>Nomor</td>
            <td>Nama Barang</td>
            <td>Jenis Barang</td>
            <td>Harga Barang</td>
            <td>Stok</td>
            <td>action</td>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($data as $row) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row["nama_barang"]; ?></td>
                <td><?= $row["jenis_barang"]; ?></td>
                <td><?= $row["harga_barang"]; ?></td>
                <td><?= $row["stok"]; ?></td>
                <td>
                    <a href="editbarang.php?id=<?= $row["id"]; ?>">Edit Data</a>
                    <a href="hapusbarang.php?id=<?= $row["id"]; ?>" onclick=" return confirm('Apakah anda yakin ingin menghapus data?')"> Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<br></br>
<?php include '../layout/footer.php' ?>