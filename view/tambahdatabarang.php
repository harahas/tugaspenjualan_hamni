<?php
include '../layout/header.php';
include '../config/connection.php';
include '../controller/barang.php';
include '../model/databarang.php'
?>

<?php
if (isset($_POST["simpan"])) {
    create_data($_POST);
}

$query = select("SELECT * FROM databarang");
?>

<h1 class="text-center"> Tambah Data Barang</h1>
<form action="" method="POST">
    <div class="mb-3">
        <label for="nama_barang" class="form-label">Nama Barang</label>
        <input type="text" name="nama_barang" class="form-control" id="nama_barang" placeholder="Masukan Nama Barang">
    </div>
    <div class="mb-3">
        <label for="jenis_barang" class="form-label">Jenis Barang</label>
        <select class="form-select" aria-label="Default select example" name="jenis_barang" required>
            <option selected disabled value="">Silahkan Pilih Jenis Barang</option>
            <option value="Elektronik">Elektronik</option>
            <option value="Alat Tulis Kantor">Alat Tulis Kantor</option>
            <option value="Fashion">Fashion</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="harga_barang" class="form-label">Harga Barang</label>
        <input type="text" name="harga_barang" class="form-control" id="harga_barang" placeholder="Masukan Harga Barang">
    </div>
    <div class="mb-3">
        <label for="stok" class="form-label">Stok</label>
        <input type="text" name="stok" class="form-control" id="stok" placeholder="Masukan Stok">
    </div>

    <br></br>
    <button type="submit" class="btn btn-dark" name="simpan">Simpan</button>
</form>
<?php include '../layout/footer.php' ?>