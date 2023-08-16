<?php
include '../config/connection.php';
function create_data($request)
{
    global $conn;
    $nama_barang = $request["nama_barang"];
    $jenis_barang = $request["jenis_barang"];
    $harga_barang = $request["harga_barang"];
    $stok = $request["stok"];

    mysqli_query($conn, "INSERT INTO databarang VALUES('','$nama_barang','$jenis_barang','$harga_barang','$stok')");

    $cek = mysqli_affected_rows($conn);

    if ($cek) {
        echo '<script>
        alert("Data Berhasil Ditambahkan")
        document.location.href = "listbarang.php"
        </script>';
    } else {
        echo '<script>
        alert("Data Gagal Ditambahkan")
        document.location.href = "listbarang.php"
        </script>';
    }
}

function editbarang($request)
{
    global $conn;
    $id = $request["id"];
    $nama_barang = $request["nama_barang"];
    $jenis_barang = $request["jenis_barang"];
    $harga_barang = $request["harga_barang"];
    $stok = $request["stok"];

    mysqli_query($conn, "UPDATE databarang SET nama_barang = '$nama_barang', jenis_barang = '$jenis_barang', harga_barang = '$harga_barang', stok = '$stok' WHERE id = $id");

    $cek = mysqli_affected_rows($conn);

    if ($cek) {
        echo '<script>
        alert("Data Berhasil DiUpdate")
        document.location.href = "listbarang.php"
        </script>';
    } else {
        echo '<script>
        alert("Data Gagal DiUpdate")
        document.location.href = "listbarang.php"
        </script>';
    }
}
function hapusbarang($id)
{
    global $conn;
    mysqli_query($conn, "DELETE from databarang WHERE id = $id");

    echo '<script>
    alert("Data Berhasil Dihapus")
    document.location.href = "listbarang.php"
    </script>';
}
