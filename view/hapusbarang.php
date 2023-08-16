<?php
include '../model/databarang.php';
include '../config/connection.php';
include '../controller/barang.php';

$id = $_GET["id"];
hapusbarang($id);
