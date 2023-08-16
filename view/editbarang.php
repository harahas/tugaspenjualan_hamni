<?php
include '../model/databarang.php';
include '../layout/header.php';
include '../config/connection.php';
include '../controller/barang.php';

$id = $_GET["id"];
if (isset($_POST["simpan"])) {
    editbarang($_POST);
}

$data = select("SELECT * FROM databarang WHERE id = $id")[0];

?>
<h1 class="text-center">Edit Data Barang</h1>
<form action="" method="POST">
    <input type="hidden" name="id" value="<?= $data["id"]; ?>">
    <div class="mb-3">
        <label for="nama_barang" class="form-label">Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" id="nama_barang" placeholder="Masukan Nama Barang" value="<?= $data["nama_barang"]; ?>">
    </div>
    <div class="mb-3">
        <label for="jenis_barang" class="form-label">Jenis Barang</label>
        <select class="form-select" aria-label="Default select example" name="jenis_barang" id="jenis_barang" required>
            <option value="Elektronik" <?= ($data["jenis_barang"] == 'Elektronik' ? 'selected' : '') ?>>Elektronik</option>
            <option value="Alat Tulis Kantor" <?= ($data["jenis_barang"] == 'Alat Tulis Kantor' ? 'selected' : '') ?>>Alat Tulis Kantor</option>
            <option value="Fashion" <?= ($data["jenis_barang"] == 'Fashion' ? 'selected' : '') ?>>Fashion</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="harga_barang" class="form-label">Harga Barang</label>
        <input type="text" name="harga_barang" class="form-control" id="harga_barang" placeholder="Masukan Harga Barang" value="<?= $data["harga_barang"]; ?>">
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label">Stok</label>
        <input type="text" name="stok" class="form-control" id="stok" placeholder="Masukan Stok" value="<?= $data["stok"]; ?>">
    </div>

    <br></br>
    <button type="submit" class="btn btn-dark" name="simpan">Edit Data</button>
</form>
<?php include '../layout/footer.php' ?>