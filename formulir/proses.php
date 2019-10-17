<?php
    include '../databasee.php';
    $siswa = new Biodata();
    $aksi = $_GET['aksi'];
    if (isset($_POST['save'])) {
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jeniskelamin = $_POST['jeniskelamin'];
        $agama = $_POST['agama'];
        $umur = date('Y') - $tanggal_lahir;
    }
    if ($aksi == "tambah") {
        $siswa->create($nama, $alamat, $tanggal_lahir, $jeniskelamin, $agama,$umur);
        header("Location:index.php");
    } elseif ($aksi == "update") {
        $siswa->update($id, $nama, $alamat, $tanggal_lahir, $jeniskelamin, $agama, $umur);
        header("Location:index.php");
    } elseif ($aksi == "delete") {
        $siswa->delete($_GET['id']);
        header("Location:index.php");
    }
?>